<?php

declare(strict_types=1);

namespace Stu\Component\Ship\System\Type;

use Stu\Component\Ship\System\ShipSystemModeEnum;
use Stu\Component\Ship\System\ShipSystemTypeEnum;
use Stu\Component\Ship\System\ShipSystemTypeInterface;
use Stu\Orm\Entity\ShipInterface;

final class SubspaceSensorShipSystem extends AbstractShipSystemType implements ShipSystemTypeInterface
{
    public function checkActivationConditions(ShipInterface $ship, &$reason): bool
    {
        if ($ship->getCloakState()) {
            $reason = _('die Tarnung aktiviert ist');

            return false;
        }

        return true;
    }

    public function getEnergyUsageForActivation(): int
    {
        return 30;
    }

    public function getEnergyConsumption(): int
    {
        return 15;
    }

    public function getPriority(): int
    {
        return ShipSystemTypeEnum::SYSTEM_PRIORITIES[ShipSystemTypeEnum::SYSTEM_SUBSPACE_SCANNER];
    }

    public function activate(ShipInterface $ship): void
    {
        $ship->getShipSystem(ShipSystemTypeEnum::SYSTEM_SUBSPACE_SCANNER)->setMode(ShipSystemModeEnum::MODE_ON);
    }

    public function deactivate(ShipInterface $ship): void
    {
        $ship->getShipSystem(ShipSystemTypeEnum::SYSTEM_SUBSPACE_SCANNER)->setMode(ShipSystemModeEnum::MODE_OFF);
    }
}
