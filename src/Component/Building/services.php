<?php

declare(strict_types=1);

namespace Stu\Module\Building;

use function DI\autowire;
use Stu\Component\Building\BuildingManager;
use Stu\Component\Building\BuildingManagerInterface;

return [
    BuildingManagerInterface::class => autowire(BuildingManager::class),
];
