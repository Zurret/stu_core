<?php

declare(strict_types=1);

namespace Stu\Module\Colony\Action\Terraform;

use request;
use Stu\Component\Colony\Storage\ColonyStorageManagerInterface;
use Stu\Component\Queue\Message\MessageFactoryInterface;
use Stu\Component\Queue\Publisher\DelayedJobPublisherInterface;
use Stu\Module\Colony\Lib\ColonyLoaderInterface;
use Stu\Module\Colony\View\ShowColony\ShowColony;
use Stu\Module\Control\ActionControllerInterface;
use Stu\Module\Control\GameControllerInterface;
use Stu\Orm\Entity\TerraformingInterface;
use Stu\Orm\Repository\ColonyRepositoryInterface;
use Stu\Orm\Repository\ColonyTerraformingRepositoryInterface;
use Stu\Orm\Repository\PlanetFieldRepositoryInterface;
use Stu\Orm\Repository\TerraformingRepositoryInterface;

final class Terraform implements ActionControllerInterface
{
    public const ACTION_IDENTIFIER = 'B_TERRAFORM';

    private ColonyLoaderInterface $colonyLoader;

    private TerraformingRepositoryInterface $terraformingRepository;

    private ColonyTerraformingRepositoryInterface $colonyTerraformingRepository;

    private PlanetFieldRepositoryInterface $planetFieldRepository;

    private ColonyStorageManagerInterface $colonyStorageManager;

    private ColonyRepositoryInterface $colonyRepository;

    private DelayedJobPublisherInterface $delayedJobPublisher;

    private MessageFactoryInterface $messageFactory;

    public function __construct(
        ColonyLoaderInterface $colonyLoader,
        TerraformingRepositoryInterface $terraformingRepository,
        ColonyTerraformingRepositoryInterface $colonyTerraformingRepository,
        PlanetFieldRepositoryInterface $planetFieldRepository,
        ColonyStorageManagerInterface $colonyStorageManager,
        ColonyRepositoryInterface $colonyRepository,
        DelayedJobPublisherInterface $delayedJobPublisher,
        MessageFactoryInterface $messageFactory
    ) {
        $this->colonyLoader = $colonyLoader;
        $this->terraformingRepository = $terraformingRepository;
        $this->colonyTerraformingRepository = $colonyTerraformingRepository;
        $this->planetFieldRepository = $planetFieldRepository;
        $this->colonyStorageManager = $colonyStorageManager;
        $this->colonyRepository = $colonyRepository;
        $this->delayedJobPublisher = $delayedJobPublisher;
        $this->messageFactory = $messageFactory;
    }

    public function handle(GameControllerInterface $game): void
    {
        $user = $game->getUser();

        $colony = $this->colonyLoader->byIdAndUser(
            request::indInt('id'),
            $user->getId()
        );
        $game->setView(ShowColony::VIEW_IDENTIFIER);

        $fieldId = (int) request::indInt('fid');

        $field = $this->planetFieldRepository->getByColonyAndFieldId(
            $colony->getId(),
            $fieldId
        );
        if ($field === null) {
            return;
        }

        if ($field->getBuildingId() > 0) {
            return;
        }
        if ($field->getTerraformingId() > 0) {
            return;
        }
        /**
         * @var TerraformingInterface $terraf
         */
        $terraf = $this->terraformingRepository->find(request::getIntFatal('tfid'));
        if ($terraf === null) {
            return;
        }
        if ($field->getFieldType() != $terraf->getFromFieldTypeId()) {
            return;
        }
        if ($terraf->getEnergyCosts() > $colony->getEps()) {
            $game->addInformationf(
                _('Es wird %s Energie ben??tigt - Vorhanden ist nur %s'),
                $terraf->getEnergyCosts(),
                $colony->getEps()
            );

            return;
        }

        $storage = $colony->getStorage();

        foreach ($terraf->getCosts() as $obj) {
            $commodityId = $obj->getGoodId();
            if (!$storage->containsKey($commodityId)) {
                $game->addInformationf(
                    _('Es werden %s %s ben??tigt - Es ist jedoch keines vorhanden'),
                    $obj->getAmount(),
                    $obj->getGood()->getName()
                );

                return;
            }
            if ($obj->getAmount() > $storage[$commodityId]->getAmount()) {
                $game->addInformationf(
                    _('Es werden %s %s ben??tigt - Vorhanden sind nur %s'),
                    $obj->getAmount(),
                    $obj->getGood()->getName(),
                    $storage[$commodityId]->getAmount()
                );

                return;
            }
        }

        foreach ($terraf->getCosts() as $obj) {
            $this->colonyStorageManager->lowerStorage($colony, $obj->getGood(), $obj->getAmount());
        }
        $colony->clearCache();
        $colony->lowerEps($terraf->getEnergyCosts());
        $time = time() + $terraf->getDuration();

        $obj = $this->colonyTerraformingRepository->prototype();
        $obj->setColony($colony);
        $obj->setField($field);
        $obj->setTerraforming($terraf);
        $obj->setFinishDate($time);

        $this->colonyTerraformingRepository->save($obj);

        $field->setTerraforming($terraf);

        $this->planetFieldRepository->save($field);

        $this->colonyRepository->save($colony);

        /**
         *$message = $this->messageFactory->createTerraformingJobProcessMessage()
         *    ->setTerraformingId($obj->getId());.
         *
         *$this->delayedJobPublisher->publish(
         *    $message,
         *    $terraf->getDuration()
         *);
         */
        $game->addInformationf(
            _('%s wird durchgef??hrt - Fertigstellung: %s'),
            $terraf->getDescription(),
            date('d.m.Y H:i', $time)
        );
    }

    public function performSessionCheck(): bool
    {
        return true;
    }
}
