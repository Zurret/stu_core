<?php

declare(strict_types=1);

namespace Stu\Module\ShipModule;

final class ModuleSpecialAbilityEnum
{
    public const MODULE_SPECIAL_CLOAK = 1;
    public const MODULE_SPECIAL_RPG = 2;
    public const MODULE_SPECIAL_TACHYON_SCANNER = 4;
    public const MODULE_SPECIAL_TROOP_QUARTERS = 5;
    public const MODULE_SPECIAL_ASTRO_LABORATORY = 6;
    public const MODULE_SPECIAL_SUBSPACE_FIELD_SENSOR = 7;
    public const MODULE_SPECIAL_MATRIX_SENSOR = 8;
    public const MODULE_SPECIAL_TORPEDO_STORAGE = 9;
    public const MODULE_SPECIAL_SHUTTLE_RAMP = 10;

    public static function getDescription(int $specialId): string
    {
        switch ($specialId) {
            case static::MODULE_SPECIAL_CLOAK:
                return _('Tarnung');
            case static::MODULE_SPECIAL_RPG:
                return _('RPG-Schiff');
            case static::MODULE_SPECIAL_TACHYON_SCANNER:
                return _('Tachyon-Scanner');
            case static::MODULE_SPECIAL_TROOP_QUARTERS:
                return _('Truppen-Quartiere');
            case static::MODULE_SPECIAL_ASTRO_LABORATORY:
                return _('Astrometrie-Labor');
            case static::MODULE_SPECIAL_SUBSPACE_FIELD_SENSOR:
                return _('Subraumfeldsensor');
            case static::MODULE_SPECIAL_MATRIX_SENSOR:
                return _('Matrix-Sensor');
            case static::MODULE_SPECIAL_TORPEDO_STORAGE:
                return _('Torpedo-Lager');
            case static::MODULE_SPECIAL_SHUTTLE_RAMP:
                return _('Shuttle-Rampe');
        }

        return '';
    }

    public static function getHash($specials): ?int
    {
        $result = 0;

        foreach ($specials as $special) {
            $result += pow(2, $special->getSpecialId() - 1);
        }

        return $result == 0 ? null : $result;
    }
}
