<?php

declare(strict_types=1);

namespace Stu\Module\Api;

use function DI\autowire;
use Stu\Module\Api\Middleware\Request\JsonSchemaRequest;
use Stu\Module\Api\Middleware\Request\JsonSchemaRequestInterface;
use Stu\Module\Api\Middleware\Session;
use Stu\Module\Api\Middleware\SessionInterface;

return [
    SessionInterface::class           => autowire(Session::class),
    JsonSchemaRequestInterface::class => autowire(JsonSchemaRequest::class),
];
