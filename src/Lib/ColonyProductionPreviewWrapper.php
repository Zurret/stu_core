<?php

declare(strict_types=1);

namespace Stu\Lib;

use Stu\Lib\ColonyProduction\ColonyProduction;
use Stu\Orm\Repository\BuildingGoodRepositoryInterface;

class ColonyProductionPreviewWrapper
{
    private $production = null;

    public function __construct(&$production)
    {
        $this->production = $production;
    }

    public function __get($buildingId)
    {
        return $this->getPreview($buildingId);
    }

    private function getPreview($buildingId)
    {
        // @todo refactor
        global $container;

        $bgoods = $container->get(BuildingGoodRepositoryInterface::class)->getByBuilding((int) $buildingId);
        $ret = [];
        foreach ($bgoods as $commodityId => $prod) {
            $commodityId = $prod->getGoodId();
            if (array_key_exists($commodityId, $this->production)) {
                $ret[$commodityId] = clone $this->production[$commodityId];
                $ret[$commodityId]->upperProduction($prod->getAmount());
            } else {
                $obj = new ColonyProduction();
                $obj->setGoodId($commodityId);
                $obj->setProduction($prod->getAmount());
                $ret[$commodityId] = $obj;
            }
            $ret[$commodityId]->setPreviewProduction($prod->getAmount());
        }

        return $ret;
    }
}
