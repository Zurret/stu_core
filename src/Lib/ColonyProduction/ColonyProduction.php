<?php

namespace Stu\Lib\ColonyProduction;

use Stu\Orm\Entity\CommodityInterface;
use Stu\Orm\Repository\CommodityRepositoryInterface;

class ColonyProduction
{
    private $data = null;

    public function __construct(&$data = [])
    {
        $this->data = $data;

        if (!empty($data)) {
            $this->data['gc'] += $this->data['pc'];
        }
    }

    public function getGoodId()
    {
        return $this->data['goods_id'];
    }

    public function setGoodId($value)
    {
        $this->data['goods_id'] = $value;
    }

    public function getProduction()
    {
        return $this->data['gc'];
    }

    public function getProductionDisplay()
    {
        if ($this->getProduction() <= 0) {
            return $this->getProduction();
        }

        return '+'.$this->getProduction();
    }

    public function getCssClass()
    {
        if ($this->getProduction() < 0) {
            return 'negative';
        }
        if ($this->getProduction() > 0) {
            return 'positive';
        }
    }

    public function lowerProduction($value)
    {
        $this->setProduction($this->getProduction() - $value);
    }

    public function upperProduction($value)
    {
        $this->setProduction($this->getProduction() + $value);
    }

    public function setProduction($value)
    {
        $this->data['gc'] = $value;
    }

    private $preview = false;

    public function setPreviewProduction($value)
    {
        $this->preview = $value;
    }

    public function getPreviewProduction()
    {
        return $this->preview;
    }

    public function getPreviewProductionDisplay()
    {
        if ($this->getPreviewProduction() <= 0) {
            return $this->getPreviewProduction();
        }

        return '+'.$this->getPreviewProduction();
    }

    public function getPreviewProductionCss()
    {
        if ($this->getPreviewProduction() < 0) {
            return 'negative';
        }

        return 'positive';
    }

    public function getGood(): CommodityInterface
    {
        // @todo refactor
        global $container;

        return $container->get(CommodityRepositoryInterface::class)->find((int) $this->getGoodId());
    }
}
