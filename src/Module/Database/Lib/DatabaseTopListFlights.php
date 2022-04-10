<?php

declare(strict_types=1);

namespace Stu\Module\Database\Lib;

class DatabaseTopListFlights extends DatabaseTopList
{
    private $signatures = null;
    private $shipcount = null;
    private $faction = null;

    public function __construct($entry)
    {
        parent::__construct($entry['user_id']);
        $this->signatures = $entry['sc'];
        $this->shipcount = $entry['shipc'];
        $this->faction = $entry['race'];
    }

    public function getSignatures()
    {
        return $this->signatures;
    }

    public function getShipCount()
    {
        return $this->shipcount;
    }

    public function getFaction()
    {
        return $this->faction;
    }
}
