<?php

declare(strict_types=1);

namespace Stu\Module\Crew;

use function DI\autowire;
use Stu\Module\Crew\Lib\CrewCreator;
use Stu\Module\Crew\Lib\CrewCreatorInterface;

return [
    CrewCreatorInterface::class => autowire(CrewCreator::class),
];
