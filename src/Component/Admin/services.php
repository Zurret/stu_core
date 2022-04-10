<?php

declare(strict_types=1);

namespace Stu\Component\Admin;

use function DI\autowire;
use Stu\Component\Admin\Notification\FailureEmailSender;
use Stu\Component\Admin\Notification\FailureEmailSenderInterface;
use Stu\Component\Admin\Reset\ResetManager;
use Stu\Component\Admin\Reset\ResetManagerInterface;

return [
    ResetManagerInterface::class       => autowire(ResetManager::class),
    FailureEmailSenderInterface::class => autowire(FailureEmailSender::class),
];
