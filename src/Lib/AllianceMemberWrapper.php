<?php

namespace Lib;

use Stu\Orm\Entity\AllianceInterface;
use Stu\Orm\Entity\UserInterface;

class AllianceMemberWrapper
{
    private $user = null;
    private $alliance = null;

    public function __construct(UserInterface $user, AllianceInterface $alliance)
    {
        $this->user = $user;
        $this->alliance = $alliance;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getAlliance()
    {
        return $this->alliance;
    }

    public function isFounder()
    {
        return $this->getUser()->getId() == $this->getAlliance()->getFounder()->getUserId();
    }

    public function getUserId()
    {
        return $this->getUser()->getId();
    }

    public function getOnlineStateCssClass(): string
    {
        if ($this->user->isOnline()) {
            return 'online';
        }

        return 'offline';
    }
}
