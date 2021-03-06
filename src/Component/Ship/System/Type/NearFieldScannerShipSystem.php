<?php

declare(strict_types=1);

namespace Stu\Component\Ship\System\Type;

use Stu\Component\Ship\ShipAlertStateEnum;
use Stu\Component\Ship\ShipStateEnum;
use Stu\Component\Ship\System\ShipSystemModeEnum;
use Stu\Component\Ship\System\ShipSystemTypeEnum;
use Stu\Component\Ship\System\ShipSystemTypeInterface;
use Stu\Module\Ship\Lib\AstroEntryLibInterface;
use Stu\Orm\Entity\ShipInterface;

final class NearFieldScannerShipSystem extends AbstractShipSystemType implements ShipSystemTypeInterface
{
    private AstroEntryLibInterface $astroEntryLib;

    public function __construct(
        AstroEntryLibInterface $astroEntryLib
    ) {
        $this->astroEntryLib = $astroEntryLib;
    }

    public function checkDeactivationConditions(ShipInterface $ship, &$reason): bool
    {
        if ($ship->getAlertState() === ShipAlertStateEnum::ALERT_RED) {
            $reason = _('die Alarmstufe Rot ist');

            return false;
        }

        return true;
    }

    public function activate(ShipInterface $ship): void
    {
        $ship->getShipSystem(ShipSystemTypeEnum::SYSTEM_NBS)->setMode(ShipSystemModeEnum::MODE_ON);
    }

    public function deactivate(ShipInterface $ship): void
    {
        $ship->getShipSystem(ShipSystemTypeEnum::SYSTEM_NBS)->setMode(ShipSystemModeEnum::MODE_OFF);

        //other consequences
        if ($ship->hasShipSystem(ShipSystemTypeEnum::SYSTEM_ASTRO_LABORATORY)) {
            $ship->getShipSystem(ShipSystemTypeEnum::SYSTEM_ASTRO_LABORATORY)->setMode(ShipSystemModeEnum::MODE_OFF);

            if ($ship->getState() === ShipStateEnum::SHIP_STATE_SYSTEM_MAPPING) {
                $this->astroEntryLib->cancelAstroFinalizing($ship);
            }
        }
    }

    public function handleDestruction(ShipInterface $ship): void
    {
        if ($ship->hasShipSystem(ShipSystemTypeEnum::SYSTEM_ASTRO_LABORATORY)) {
            $ship->getShipSystem(ShipSystemTypeEnum::SYSTEM_ASTRO_LABORATORY)->setMode(ShipSystemModeEnum::MODE_OFF);

            if ($ship->getState() === ShipStateEnum::SHIP_STATE_SYSTEM_MAPPING) {
                $this->astroEntryLib->cancelAstroFinalizing($ship);
            }
        }
    }
}
