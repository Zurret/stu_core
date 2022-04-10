<?php

declare(strict_types=1);

namespace Stu\Module\Alliance\Lib;

use Noodlehaus\ConfigInterface;
use Stu\Component\Alliance\AllianceEnum;
use Stu\Component\Game\GameEnum;
use Stu\Component\Ship\ShipEnum;
use Stu\Orm\Entity\AllianceInterface;
use Stu\Orm\Entity\AllianceJobInterface;
use Stu\Orm\Repository\AllianceBoardRepositoryInterface;
use Stu\Orm\Repository\AllianceJobRepositoryInterface;
use Stu\Orm\Repository\AllianceRelationRepositoryInterface;
use Stu\Orm\Repository\AllianceRepositoryInterface;
use Stu\Orm\Repository\DockingPrivilegeRepositoryInterface;
use Stu\Orm\Repository\UserRepositoryInterface;

final class AllianceActionManager implements AllianceActionManagerInterface
{
    private AllianceJobRepositoryInterface $allianceJobRepository;

    private AllianceRelationRepositoryInterface $allianceRelationRepository;

    private AllianceBoardRepositoryInterface $allianceBoardRepository;

    private AllianceRepositoryInterface $allianceRepository;

    private DockingPrivilegeRepositoryInterface $dockingPrivilegeRepository;

    private \Stu\Module\Message\Lib\PrivateMessageSenderInterface $privateMessageSender;

    private UserRepositoryInterface $userRepository;

    private ConfigInterface $config;

    public function __construct(
        AllianceJobRepositoryInterface $allianceJobRepository,
        AllianceRelationRepositoryInterface $allianceRelationRepository,
        AllianceBoardRepositoryInterface $allianceBoardRepository,
        AllianceRepositoryInterface $allianceRepository,
        DockingPrivilegeRepositoryInterface $dockingPrivilegeRepository,
        \Stu\Module\Message\Lib\PrivateMessageSenderInterface $privateMessageSender,
        UserRepositoryInterface $userRepository,
        ConfigInterface $config
    ) {
        $this->allianceJobRepository = $allianceJobRepository;
        $this->allianceRelationRepository = $allianceRelationRepository;
        $this->allianceBoardRepository = $allianceBoardRepository;
        $this->allianceRepository = $allianceRepository;
        $this->dockingPrivilegeRepository = $dockingPrivilegeRepository;
        $this->privateMessageSender = $privateMessageSender;
        $this->userRepository = $userRepository;
        $this->config = $config;
    }

    public function setJobForUser(int $allianceId, int $userId, int $jobTypeId): void
    {
        $obj = $this->allianceJobRepository->getSingleResultByAllianceAndType(
            $allianceId,
            $jobTypeId
        );
        if (!$obj) {
            $obj = $this->allianceJobRepository->prototype();
            $obj->setType($jobTypeId);
            $obj->setAlliance($this->allianceRepository->find($allianceId));
        }
        $obj->setUser($this->userRepository->find($userId));

        $this->allianceJobRepository->save($obj);
    }

    public function delete(int $allianceId, bool $sendMesage = true): void
    {
        $alliance = $this->allianceRepository->find($allianceId);
        if ($alliance === null) {
            return;
        }

        $this->dockingPrivilegeRepository->truncateByTypeAndTarget(ShipEnum::DOCK_PRIVILEGE_ALLIANCE, $allianceId);

        $text = sprintf(_('Die Allianz %s wurde aufgelöst'), $alliance->getName());

        foreach ($alliance->getMembers() as $user) {
            if ($sendMesage === true) {
                $this->privateMessageSender->send(GameEnum::USER_NOONE, $user->getId(), $text);
            }
            $user->setAlliance(null);

            $this->userRepository->save($user);
        }
        if ($alliance->getAvatar()) {
            @unlink(
                sprintf(
                    '%s/%s/%s.png',
                    $this->config->get('game.webroot'),
                    $this->config->get('game.alliance_avatar_path'),
                    $alliance->getAvatar()
                )
            );
        }

        $this->allianceRepository->delete($alliance);
    }

    public function mayEdit(int $allianceId, int $userId): bool
    {
        $successor = $this->allianceJobRepository->getSingleResultByAllianceAndType(
            $allianceId,
            AllianceEnum::ALLIANCE_JOBS_SUCCESSOR
        );
        $founder = $this->allianceJobRepository->getSingleResultByAllianceAndType(
            $allianceId,
            AllianceEnum::ALLIANCE_JOBS_FOUNDER
        );

        return (
                $successor !== null && $userId === $successor->getUserId()
            ) || $userId === $founder->getUserId();
    }

    public function mayManageForeignRelations(int $allianceId, int $userId): bool
    {
        $job = $this->allianceJobRepository->getSingleResultByAllianceAndType(
            $allianceId,
            AllianceEnum::ALLIANCE_JOBS_DIPLOMATIC
        );

        if ($job === null || $job->getUserId() !== $userId) {
            return $this->mayEdit($allianceId, $userId);
        }

        return true;
    }

    public function sendMessage(int $allianceId, string $text): void
    {
        /** @var AllianceJobInterface[] $jobList */
        $jobList = array_filter(
            $this->allianceJobRepository->getByAlliance($allianceId),
            function (AllianceJobInterface $job): bool {
                return $job->getType() !== AllianceEnum::ALLIANCE_JOBS_PENDING;
            }
        );

        foreach ($jobList as $job) {
            $this->privateMessageSender->send(GameEnum::USER_NOONE, $job->getUserId(), $text);
        }
    }

    public function mayEditFactionMode(AllianceInterface $alliance, int $factionId): bool
    {
        if ($alliance->getFactionId() != 0) {
            return true;
        }
        foreach ($alliance->getMembers() as $obj) {
            if ($obj->getFactionId() !== $factionId) {
                return false;
            }
        }

        return true;
    }
}
