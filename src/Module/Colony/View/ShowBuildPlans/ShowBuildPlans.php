<?php

declare(strict_types=1);

namespace Stu\Module\Colony\View\ShowBuildPlans;

use ColonyMenu;
use Stu\Component\Colony\ColonyEnum;
use Stu\Module\Colony\Lib\ColonyGuiHelperInterface;
use Stu\Module\Colony\Lib\ColonyLoaderInterface;
use Stu\Module\Control\GameControllerInterface;
use Stu\Module\Control\ViewControllerInterface;
use Stu\Orm\Entity\BuildingFunctionInterface;
use Stu\Orm\Repository\BuildingFunctionRepositoryInterface;
use Stu\Orm\Repository\ShipBuildplanRepositoryInterface;

final class ShowBuildPlans implements ViewControllerInterface
{
    public const VIEW_IDENTIFIER = 'SHOW_BUILDPLANS';

    private ColonyLoaderInterface $colonyLoader;

    private ColonyGuiHelperInterface $colonyGuiHelper;

    private ShowBuildPlansRequestInterface $showBuildPlansRequest;

    private BuildingFunctionRepositoryInterface $buildingFunctionRepository;

    private ShipBuildplanRepositoryInterface $shipBuildplanRepository;

    public function __construct(
        ColonyLoaderInterface $colonyLoader,
        ColonyGuiHelperInterface $colonyGuiHelper,
        ShowBuildPlansRequestInterface $showBuildPlansRequest,
        BuildingFunctionRepositoryInterface $buildingFunctionRepository,
        ShipBuildplanRepositoryInterface $shipBuildplanRepository
    ) {
        $this->colonyLoader = $colonyLoader;
        $this->colonyGuiHelper = $colonyGuiHelper;
        $this->showBuildPlansRequest = $showBuildPlansRequest;
        $this->buildingFunctionRepository = $buildingFunctionRepository;
        $this->shipBuildplanRepository = $shipBuildplanRepository;
    }

    public function handle(GameControllerInterface $game): void
    {
        $userId = $game->getUser()->getId();

        $colony = $this->colonyLoader->byIdAndUser(
            $this->showBuildPlansRequest->getColonyId(),
            $userId
        );

        $this->colonyGuiHelper->register($colony, $game);

        /** @var BuildingFunctionInterface $buildingFunction */
        $buildingFunction = $this->buildingFunctionRepository->find(
            $this->showBuildPlansRequest->getBuildingFunctionId()
        );

        $game->showMacro('html/colonymacros.xhtml/cm_buildplans');

        $game->setTemplateVar('COLONY', $colony);
        $game->setTemplateVar('COLONY_MENU_SELECTOR', new ColonyMenu(ColonyEnum::MENU_BUILDPLANS));
        $game->setTemplateVar(
            'AVAILABLE_BUILDPLANS',
            $this->shipBuildplanRepository->getByUserAndBuildingFunction(
                $userId,
                $buildingFunction->getFunction()
            )
        );
    }
}
