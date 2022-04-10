<?php

declare(strict_types=1);

namespace Stu\Lib;

use Stu\Orm\Entity\ColonyInterface;
use Stu\Orm\Repository\BuildingRepositoryInterface;

class ColonyEpsProductionPreviewWrapper
{
    private $colony = null;

    public function __construct(ColonyInterface $colony)
    {
        $this->colony = $colony;
    }

    private $buildingId = null;

    private $wrappers = [];

    public function __get($buildingId)
    {
        $this->buildingId = $buildingId;
        if (isset($this->wrappers[$buildingId])) {
            return $this->wrappers[$buildingId];
        }
        $this->wrappers[$buildingId] = $this;

        return $this->wrappers[$buildingId];
    }

    public function getBuildingId()
    {
        return $this->buildingId;
    }

    private $production = [];

    private function getPreview()
    {
        if (!isset($this->production[$this->getBuildingId()])) {
            // @todo refactor
            global $container;

            $building = $container->get(BuildingRepositoryInterface::class)->find((int) $this->buildingId);
            $this->production[$this->getBuildingId()] = $this->colony->getEpsProduction() + $building->getEpsProduction();
        }

        return $this->production[$this->getBuildingId()];
    }

    public function getDisplay()
    {
        if ($this->getPreview()) {
            return '+'.$this->getPreview();
        }

        return $this->getPreview();
    }

    public function getCSS()
    {
        if ($this->getPreview() > 0) {
            return 'positive';
        }
        if ($this->getPreview() < 0) {
            return 'negative';
        }
    }
}
