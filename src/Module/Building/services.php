<?php

declare(strict_types=1);

namespace Stu\Module\Colony;

use function DI\autowire;
use Stu\Module\Building\Action\BuildingFunctionActionMapper;
use Stu\Module\Building\Action\BuildingFunctionActionMapperInterface;

return [
    BuildingFunctionActionMapperInterface::class => autowire(BuildingFunctionActionMapper::class),
];
