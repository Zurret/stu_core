<?php

declare(strict_types=1);

class VisualNavPanelRow
{
    private $entries = [];

    public function addEntry(&$data)
    {
        $this->entries[] = $data;
    }

    public function getEntries()
    {
        return $this->entries;
    }
}
