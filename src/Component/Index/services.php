<?php

declare(strict_types=1);

namespace Stu\Component\Index;

use function DI\autowire;
use Stu\Component\Index\News\NewsFactory;
use Stu\Component\Index\News\NewsFactoryInterface;

return [
    NewsFactoryInterface::class => autowire(NewsFactory::class),
];
