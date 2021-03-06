<?php

declare(strict_types=1);

namespace Stu\Module\Ship\Action\FleetAlertRed;

use request;
use Stu\Component\Ship\ShipAlertStateEnum;
use Stu\Module\Control\ActionControllerInterface;
use Stu\Module\Control\GameControllerInterface;
use Stu\Module\Ship\Lib\ActivatorDeactivatorHelperInterface;
use Stu\Module\Ship\View\ShowShip\ShowShip;

final class FleetAlertRed implements ActionControllerInterface
{
    public const ACTION_IDENTIFIER = 'B_FLEET_ALERT_RED';

    private ActivatorDeactivatorHelperInterface $helper;

    public function __construct(
        ActivatorDeactivatorHelperInterface $helper
    ) {
        $this->helper = $helper;
    }

    public function handle(GameControllerInterface $game): void
    {
        $game->setView(ShowShip::VIEW_IDENTIFIER);

        $this->helper->setAlertStateFleet(request::indInt('id'), ShipAlertStateEnum::ALERT_RED, $game);
    }

    public function performSessionCheck(): bool
    {
        return true;
    }
}
