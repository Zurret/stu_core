<?php

declare(strict_types=1);

namespace Stu\Module\PlayerProfile;

use function DI\autowire;
use Stu\Module\Control\GameController;
use Stu\Module\PlayerProfile\View\Overview\Overview;

return [
    'PLAYER_PROFILE_ACTIONS' => [],
    'PLAYER_PROFILE_VIEWS'   => [
        GameController::DEFAULT_VIEW => autowire(Overview::class),
    ],
];
