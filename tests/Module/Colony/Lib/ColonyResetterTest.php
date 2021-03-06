<?php

declare(strict_types=1);

namespace Stu\Module\Colony\Lib;

use Mockery;
use Mockery\MockInterface;
use Stu\Component\Game\GameEnum;
use Stu\Orm\Entity\ColonyInterface;
use Stu\Orm\Entity\ColonyTerraformingInterface;
use Stu\Orm\Entity\UserInterface;
use Stu\Orm\Repository\ColonyRepositoryInterface;
use Stu\Orm\Repository\ColonyShipQueueRepositoryInterface;
use Stu\Orm\Repository\ColonyStorageRepositoryInterface;
use Stu\Orm\Repository\ColonyTerraformingRepositoryInterface;
use Stu\Orm\Repository\PlanetFieldRepositoryInterface;
use Stu\Orm\Repository\UserRepositoryInterface;
use Stu\StuTestCase;

class ColonyResetterTest extends StuTestCase
{
    /**
     * @var MockInterface|null|ColonyRepositoryInterface
     */
    private $colonyRepository;

    /**
     * @var MockInterface|null|UserRepositoryInterface
     */
    private $userRepository;

    /**
     * @var MockInterface|null|ColonyLibFactoryInterface
     */
    private $colonyLibFactory;

    /**
     * @var MockInterface|null|ColonyStorageRepositoryInterface
     */
    private $colonyStorageRepository;

    /**
     * @var MockInterface|null|ColonyTerraformingRepositoryInterface
     */
    private $colonyTerraformingRepository;

    /**
     * @var MockInterface|null|ColonyShipQueueRepositoryInterface
     */
    private $colonyShipQueueRepository;

    /**
     * @var null|MockInterface|PlanetFieldRepositoryInterface
     */
    private $planetFieldRepository;

    /**
     * @var null|ColonyResetter
     */
    private $resetter;

    public function setUp(): void
    {
        $this->colonyRepository = Mockery::mock(ColonyRepositoryInterface::class);
        $this->userRepository = Mockery::mock(UserRepositoryInterface::class);
        $this->colonyLibFactory = Mockery::mock(ColonyLibFactoryInterface::class);
        $this->colonyStorageRepository = Mockery::mock(ColonyStorageRepositoryInterface::class);
        $this->colonyTerraformingRepository = Mockery::mock(ColonyTerraformingRepositoryInterface::class);
        $this->colonyShipQueueRepository = Mockery::mock(ColonyShipQueueRepositoryInterface::class);
        $this->planetFieldRepository = $this->mock(PlanetFieldRepositoryInterface::class);

        $this->resetter = new ColonyResetter(
            $this->colonyRepository,
            $this->userRepository,
            $this->colonyLibFactory,
            $this->colonyStorageRepository,
            $this->colonyTerraformingRepository,
            $this->colonyShipQueueRepository,
            $this->planetFieldRepository
        );
    }

    public function testResetResetsColony(): void
    {
        $colony = Mockery::mock(ColonyInterface::class);
        $colonySurface = Mockery::mock(ColonySurfaceInterface::class);
        $user = Mockery::mock(UserInterface::class);
        $fieldTerraforming = Mockery::mock(ColonyTerraformingInterface::class);

        $this->colonyLibFactory->shouldReceive('createColonySurface')
           ->with($colony)
           ->once()
           ->andReturn($colonySurface);

        $colonySurface->shouldReceive('updateSurface')
           ->withNoArgs()
           ->once();

        $this->userRepository->shouldReceive('find')
           ->with(GameEnum::USER_NOONE)
           ->once()
           ->andReturn($user);

        $colony->shouldReceive('setEps')
           ->with(0)
           ->once()
           ->andReturnSelf();
        $colony->shouldReceive('setMaxEps')
           ->with(0)
           ->once()
           ->andReturnSelf();
        $colony->shouldReceive('setMaxStorage')
           ->with(0)
           ->once()
           ->andReturnSelf();
        $colony->shouldReceive('setWorkers')
           ->with(0)
           ->once()
           ->andReturnSelf();
        $colony->shouldReceive('setWorkless')
           ->with(0)
           ->once()
           ->andReturnSelf();
        $colony->shouldReceive('setMaxBev')
           ->with(0)
           ->once()
           ->andReturnSelf();
        $colony->shouldReceive('setImmigrationstate')
           ->with(true)
           ->once()
           ->andReturnSelf();
        $colony->shouldReceive('setPopulationlimit')
           ->with(0)
           ->once()
           ->andReturnSelf();
        $colony->shouldReceive('setUser')
           ->with($user)
           ->once()
           ->andReturnSelf();
        $colony->shouldReceive('setName')
           ->with('')
           ->once()
           ->andReturnSelf();

        $this->colonyRepository->shouldReceive('save')
           ->with($colony)
           ->once();

        $this->colonyStorageRepository->shouldReceive('truncateByColony')
           ->with($colony)
           ->once();

        $this->colonyTerraformingRepository->shouldReceive('getByColony')
           ->with([$colony])
           ->once()
           ->andReturn([$fieldTerraforming]);
        $this->colonyTerraformingRepository->shouldReceive('delete')
           ->with($fieldTerraforming)
           ->once();

        $this->colonyShipQueueRepository->shouldReceive('truncateByColony')
           ->with($colony)
           ->once();

        $this->planetFieldRepository->shouldReceive('truncateByColony')
           ->with($colony)
           ->once();

        $this->resetter->reset($colony);
    }
}
