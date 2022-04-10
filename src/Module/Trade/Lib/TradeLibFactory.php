<?php

declare(strict_types=1);

namespace Stu\Module\Trade\Lib;

use Stu\Orm\Entity\TradePostInterface;
use Stu\Orm\Repository\CommodityRepositoryInterface;
use Stu\Orm\Repository\TradeLicenseRepositoryInterface;
use Stu\Orm\Repository\TradeOfferRepositoryInterface;
use Stu\Orm\Repository\TradeStorageRepositoryInterface;
use Stu\Orm\Repository\TradeTransferRepositoryInterface;
use Stu\Orm\Repository\UserRepositoryInterface;

final class TradeLibFactory implements TradeLibFactoryInterface
{
    private TradeLicenseRepositoryInterface $tradeLicenseRepository;

    private TradeTransferRepositoryInterface $tradeTransferRepository;

    private TradeOfferRepositoryInterface $tradeOfferRepository;

    private TradeStorageRepositoryInterface $tradeStorageRepository;

    private CommodityRepositoryInterface $commodityRepository;

    private UserRepositoryInterface $userRepository;

    public function __construct(
        TradeLicenseRepositoryInterface $tradeLicenseRepository,
        TradeTransferRepositoryInterface $tradeTransferRepository,
        TradeOfferRepositoryInterface $tradeOfferRepository,
        TradeStorageRepositoryInterface $tradeStorageRepository,
        CommodityRepositoryInterface $commodityRepository,
        UserRepositoryInterface $userRepository
    ) {
        $this->tradeLicenseRepository = $tradeLicenseRepository;
        $this->tradeTransferRepository = $tradeTransferRepository;
        $this->tradeOfferRepository = $tradeOfferRepository;
        $this->tradeStorageRepository = $tradeStorageRepository;
        $this->commodityRepository = $commodityRepository;
        $this->userRepository = $userRepository;
    }

    public function createTradeAccountTal(
        TradePostInterface $tradePost,
        int $userId
    ): TradeAccountTalInterface {
        return new TradeAccountTal(
            $this->tradeLicenseRepository,
            $this->tradeTransferRepository,
            $this->tradeOfferRepository,
            $this->tradeStorageRepository,
            $tradePost,
            $userId
        );
    }

    public function createTradePostStorageManager(
        TradePostInterface $tradePost,
        int $userId
    ): TradePostStorageManagerInterface {
        return new TradePostStorageManager(
            $this->tradeStorageRepository,
            $this->commodityRepository,
            $this->userRepository,
            $tradePost,
            $userId
        );
    }
}
