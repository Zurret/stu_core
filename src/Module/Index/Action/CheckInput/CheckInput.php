<?php

declare(strict_types=1);

namespace Stu\Module\Index\Action\CheckInput;

use Noodlehaus\ConfigInterface;
use Stu\Module\Control\ActionControllerInterface;
use Stu\Module\Control\GameControllerInterface;
use Stu\Orm\Repository\UserInvitationRepositoryInterface;
use Stu\Orm\Repository\UserRepositoryInterface;

final class CheckInput implements ActionControllerInterface
{
    public const ACTION_IDENTIFIER = 'B_CHECK_REGVAR';
    public const REGISTER_STATE_OK = 'OK';
    public const REGISTER_STATE_NOK = 'NA';
    public const REGISTER_STATE_DUP = 'DUP';

    private CheckInputRequestInterface $checkInputRequest;

    private UserRepositoryInterface $userRepository;

    private UserInvitationRepositoryInterface $userInvitationRepository;

    private ConfigInterface $config;

    public function __construct(
        CheckInputRequestInterface $checkInputRequest,
        UserRepositoryInterface $userRepository,
        UserInvitationRepositoryInterface $userInvitationRepository,
        ConfigInterface $config
    ) {
        $this->checkInputRequest = $checkInputRequest;
        $this->userRepository = $userRepository;
        $this->userInvitationRepository = $userInvitationRepository;
        $this->config = $config;
    }

    public function handle(GameControllerInterface $game): void
    {
        $var = $this->checkInputRequest->getVariable();
        $value = $this->checkInputRequest->getValue();
        $state = self::REGISTER_STATE_NOK;
        switch ($var) {
            default:
            case 'loginname':
                if (!preg_match('=^[a-zA-Z0-9]+$=i', $value)) {
                    break;
                }
                if (strlen($value) < 6) {
                    break;
                }
                if ($this->userRepository->getByLogin($value)) {
                    $state = self::REGISTER_STATE_DUP;
                    break;
                }
                $state = self::REGISTER_STATE_OK;
                break;
            case 'email':
                if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    break;
                }
                if ($this->userRepository->getByEmail($value)) {
                    $state = self::REGISTER_STATE_DUP;
                    break;
                }
                $state = self::REGISTER_STATE_OK;
                break;
            case 'token':
                $invitation = $this->userInvitationRepository->getByToken($value);

                if ($invitation === null || !$invitation->isValid($this->config->get('game.invitation.ttl'))) {
                    break;
                }
                $state = self::REGISTER_STATE_OK;
                break;

        }
        echo $state;
        exit;
    }

    public function performSessionCheck(): bool
    {
        return false;
    }
}
