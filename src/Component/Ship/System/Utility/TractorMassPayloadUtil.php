<?php

declare(strict_types=1);

namespace Stu\Component\Ship\System\Utility;

use Stu\Component\Ship\System\ShipSystemTypeEnum;
use Stu\Module\Ship\Lib\Battle\ApplyDamageInterface;
use Stu\Orm\Entity\ShipInterface;

final class TractorMassPayloadUtil implements TractorMassPayloadUtilInterface
{
    private ApplyDamageInterface $applyDamage;

    public function __construct(ApplyDamageInterface $applyDamage)
    {
        $this->applyDamage = $applyDamage;
    }

    public function tryToTow(ShipInterface $ship, ShipInterface $tractoredShip): ?string
    {
        $mass = $tractoredShip->getRump()->getTractorMass();
        $payload = $ship->getTractorPayload();

        // ship to heavy?
        if ($mass > $payload) {
            $ship->deactivateTractorBeam();

            return sprintf(
                _('Traktoremitter der %s war nicht stark genug um die %s zu ziehen und wurde daher deaktiviert'),
                $ship->getName(),
                $tractoredShip->getName()
            );
        }

        return null;
    }

    public function tractorSystemSurvivedTowing(ShipInterface $ship, ShipInterface $tractoredShip, &$informations): bool
    {
        $mass = $tractoredShip->getRump()->getTractorMass();
        $payload = $ship->getTractorPayload();

        // damage tractor system if mass over 90% of max
        if (($mass > 0.9 * $payload) && rand(1, 10) === 1) {
            $system = $ship->getShipSystem(ShipSystemTypeEnum::SYSTEM_TRACTOR_BEAM);

            if ($this->applyDamage->damageShipSystem($ship, $system, rand(5, 25), $msg)) {
                //tractor destroyed
                $informations[] = sprintf(
                    _('Traktoremitter der %s wurde zerstört. Die %s wird nicht weiter gezogen'),
                    $ship->getName(),
                    $tractoredShip->getName()
                );
                $ship->deactivateTractorBeam();

                return false;
            } else {
                $informations[] = sprintf(
                    _('Traktoremitter der %s ist überbelastet und wurde dadurch beschädigt, Status: %d%%'),
                    $ship->getName(),
                    $system->getStatus()
                );
            }
        }

        return true;
    }
}
