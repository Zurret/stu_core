<?php

declare(strict_types=1);

namespace Stu\Module\Building\Action;

use Mockery;
use Mockery\MockInterface;
use Stu\Orm\Repository\ColonyShipQueueRepositoryInterface;

class ShipyardTest extends Mockery\Adapter\Phpunit\MockeryTestCase
{
    /**
     * @var null|MockInterface|ColonyShipQueueRepositoryInterface
     */
    private $colonyShipQueueRepository;

    /**
     * @var null|Shipyard
     */
    private $shipyard;

    public function setUp(): void
    {
        $this->colonyShipQueueRepository = Mockery::mock(ColonyShipQueueRepositoryInterface::class);

        $this->shipyard = new Shipyard(
            $this->colonyShipQueueRepository
        );
    }

    public function testDestructTruncatesQueue(): void
    {
        $colonyId = 666;
        $buildingFunctionId = 42;

        $this->colonyShipQueueRepository->shouldReceive('truncateByColonyAndBuildingFunction')
            ->with($colonyId, $buildingFunctionId)
            ->once();

        $this->shipyard->destruct($buildingFunctionId, $colonyId);
    }

    public function testDeactivateStopsBuildProcesses(): void
    {
        $colonyId = 666;
        $buildingFunctionId = 42;

        $this->colonyShipQueueRepository->shouldReceive('stopQueueByColonyAndBuildingFunction')
            ->with($colonyId, $buildingFunctionId)
            ->once();

        $this->shipyard->deactivate($buildingFunctionId, $colonyId);
    }

    public function testActivateRestartsBuildProcesses(): void
    {
        $colonyId = 666;
        $buildingFunctionId = 42;

        $this->colonyShipQueueRepository->shouldReceive('restartQueueByColonyAndBuildingFunction')
            ->with($colonyId, $buildingFunctionId)
            ->once();

        $this->shipyard->activate($buildingFunctionId, $colonyId);
    }
}
