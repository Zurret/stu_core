<?php

declare(strict_types=1);

namespace Stu\Module\Ship\Action\FleetActivateNbs;

use request;
use Stu\Component\Ship\System\ShipSystemTypeEnum;
use Stu\Module\Control\ActionControllerInterface;
use Stu\Module\Control\GameControllerInterface;
use Stu\Module\Ship\Lib\ActivatorDeactivatorHelperInterface;
use Stu\Module\Ship\View\ShowShip\ShowShip;

final class FleetActivateNbs implements ActionControllerInterface
{
    public const ACTION_IDENTIFIER = 'B_FLEET_ACTIVATE_NBS';

    private ActivatorDeactivatorHelperInterface $helper;

    public function __construct(
        ActivatorDeactivatorHelperInterface $helper
    ) {
        $this->helper = $helper;
    }

    public function handle(GameControllerInterface $game): void
    {
        $game->setView(ShowShip::VIEW_IDENTIFIER);

        $this->helper->activateFleet(request::indInt('id'), ShipSystemTypeEnum::SYSTEM_NBS, $game);
    }

    public function performSessionCheck(): bool
    {
        return true;
    }
}
