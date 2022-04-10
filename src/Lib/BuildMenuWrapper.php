<?php

declare(strict_types=1);

class BuildMenuWrapper
{
    public function __get($id)
    {
        return new BuildMenu($id);
    }
}
