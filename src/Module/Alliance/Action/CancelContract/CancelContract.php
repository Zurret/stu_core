<?php

declare(strict_types=1);

namespace Stu\Module\Alliance\Action\CancelContract;

use Stu\Component\Alliance\AllianceEnum;
use Stu\Exception\AccessViolation;
use Stu\Module\Alliance\Lib\AllianceActionManagerInterface;
use Stu\Module\Control\ActionControllerInterface;
use Stu\Module\Control\GameControllerInterface;
use Stu\Module\History\Lib\EntryCreatorInterface;
use Stu\Orm\Repository\AllianceRelationRepositoryInterface;

final class CancelContract implements ActionControllerInterface
{
    public const ACTION_IDENTIFIER = 'B_CANCEL_CONTRACT';

    private CancelContractRequestInterface $cancelContractRequest;

    private EntryCreatorInterface $entryCreator;

    private AllianceRelationRepositoryInterface $allianceRelationRepository;

    private AllianceActionManagerInterface $allianceActionManager;

    public function __construct(
        CancelContractRequestInterface $cancelContractRequest,
        EntryCreatorInterface $entryCreator,
        AllianceRelationRepositoryInterface $allianceRelationRepository,
        AllianceActionManagerInterface $allianceActionManager
    ) {
        $this->cancelContractRequest = $cancelContractRequest;
        $this->entryCreator = $entryCreator;
        $this->allianceRelationRepository = $allianceRelationRepository;
        $this->allianceActionManager = $allianceActionManager;
    }

    public function handle(GameControllerInterface $game): void
    {
        $user = $game->getUser();
        $alliance = $user->getAlliance();
        $allianceId = $alliance->getId();

        $relation = $this->allianceRelationRepository->find($this->cancelContractRequest->getRelationId());

        if (!$this->allianceActionManager->mayManageForeignRelations($allianceId, $user->getId())) {
            throw new AccessViolation();
        }

        if ($relation === null || ($relation->getOpponentId() != $allianceId && $relation->getAllianceId() != $allianceId)) {
            return;
        }
        if ($relation->getType() == AllianceEnum::ALLIANCE_RELATION_WAR) {
            return;
        }
        if ($relation->isPending()) {
            return;
        }

        $this->allianceRelationRepository->delete($relation);

        $text = sprintf(
            _('Die Allianz %s hat das %s aufgel??st'),
            $alliance->getName(),
            $relation->getTypeDescription()
        );

        if ($relation->getAllianceId() == $allianceId) {
            $this->allianceActionManager->sendMessage($relation->getOpponentId(), $text);
        } else {
            $this->allianceActionManager->sendMessage($relation->getAllianceId(), $text);
        }

        $this->entryCreator->addAllianceEntry(
            sprintf(
                'Das %s zwischen den Allianzen %s und %s wurde aufgel??st',
                $relation->getTypeDescription(),
                $relation->getAlliance()->getName(),
                $relation->getOpponent()->getName()
            ),
            $user->getId()
        );
        $game->addInformation(_('Das Abkommen wurde aufgel??st'));
    }

    public function performSessionCheck(): bool
    {
        return true;
    }
}
