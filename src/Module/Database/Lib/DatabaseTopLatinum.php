<?php

declare(strict_types=1);

namespace Stu\Module\Database\Lib;

class DatabaseTopLatinum extends DatabaseTopList
{
    private $amount = null;

    public function __construct($entry)
    {
        parent::__construct($entry['user_id']);
        $this->amount = $entry['amount'];
    }

    public function getAmount()
    {
        return $this->amount;
    }
}
