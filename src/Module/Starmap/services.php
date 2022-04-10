<?php

declare(strict_types=1);

namespace Stu\Module\Starmap;

use function DI\autowire;
use Stu\Module\Control\GameController;
use Stu\Module\Starmap\View\Overview\Overview;
use Stu\Module\Starmap\View\ShowByPosition\ShowByPosition;
use Stu\Module\Starmap\View\ShowByPosition\ShowByPositionRequest;
use Stu\Module\Starmap\View\ShowByPosition\ShowByPositionRequestInterface;
use Stu\Module\Starmap\View\ShowSection\ShowSection;
use Stu\Module\Starmap\View\ShowSection\ShowSectionRequest;
use Stu\Module\Starmap\View\ShowSection\ShowSectionRequestInterface;

return [
    ShowSectionRequestInterface::class    => autowire(ShowSectionRequest::class),
    ShowByPositionRequestInterface::class => autowire(ShowByPositionRequest::class),
    'STARMAP_ACTIONS'                     => [
    ],
    'STARMAP_VIEWS' => [
        GameController::DEFAULT_VIEW    => autowire(Overview::class),
        ShowSection::VIEW_IDENTIFIER    => autowire(ShowSection::class),
        ShowByPosition::VIEW_IDENTIFIER => autowire(ShowByPosition::class),
    ],
];
