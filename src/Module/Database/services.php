<?php

declare(strict_types=1);

namespace Stu\Module\Database;

use function DI\autowire;
use Stu\Module\Control\GameController;
use Stu\Module\Database\Lib\CreateDatabaseEntry;
use Stu\Module\Database\Lib\CreateDatabaseEntryInterface;
use Stu\Module\Database\View\Category\Category;
use Stu\Module\Database\View\Category\CategoryRequest;
use Stu\Module\Database\View\Category\CategoryRequestInterface;
use Stu\Module\Database\View\Category\Tal\DatabaseCategoryTalFactory;
use Stu\Module\Database\View\Category\Tal\DatabaseCategoryTalFactoryInterface;
use Stu\Module\Database\View\DatabaseEntry\DatabaseEntry;
use Stu\Module\Database\View\DatabaseEntry\DatabaseEntryRequest;
use Stu\Module\Database\View\DatabaseEntry\DatabaseEntryRequestInterface;
use Stu\Module\Database\View\DiscovererRating\DiscovererRanking;
use Stu\Module\Database\View\FlightRanking\FlightRanking;
use Stu\Module\Database\View\GoodsOverview\GoodsOverview;
use Stu\Module\Database\View\LatinumRanking\LatinumRanking;
use Stu\Module\Database\View\Overview\Overview;
use Stu\Module\Database\View\ShowGoodsLocations\ShowGoodsLocations;
use Stu\Module\Database\View\ShowGoodsLocations\ShowGoodsLocationsRequest;
use Stu\Module\Database\View\ShowGoodsLocations\ShowGoodsLocationsRequestInterface;
use Stu\Module\Database\View\UserList\UserList;
use Stu\Module\Database\View\UserList\UserListRequest;
use Stu\Module\Database\View\UserList\UserListRequestInterface;

return [
    CreateDatabaseEntryInterface::class        => autowire(CreateDatabaseEntry::class),
    DatabaseCategoryTalFactoryInterface::class => autowire(DatabaseCategoryTalFactory::class),
    DatabaseEntryRequestInterface::class       => autowire(DatabaseEntryRequest::class),
    CategoryRequestInterface::class            => autowire(CategoryRequest::class),
    ShowGoodsLocationsRequestInterface::class  => autowire(ShowGoodsLocationsRequest::class),
    UserListRequestInterface::class            => autowire(UserListRequest::class),
    'DATABASE_ACTIONS'                         => [],
    'DATABASE_VIEWS'                           => [
        Category::VIEW_IDENTIFIER           => autowire(Category::class),
        DiscovererRanking::VIEW_IDENTIFIER  => autowire(DiscovererRanking::class),
        FlightRanking::VIEW_IDENTIFIER      => autowire(FlightRanking::class),
        LatinumRanking::VIEW_IDENTIFIER     => autowire(LatinumRanking::class),
        ShowGoodsLocations::VIEW_IDENTIFIER => autowire(ShowGoodsLocations::class),
        GoodsOverview::VIEW_IDENTIFIER      => autowire(GoodsOverview::class),
        UserList::VIEW_IDENTIFIER           => autowire(UserList::class),
        DatabaseEntry::VIEW_IDENTIFIER      => autowire(DatabaseEntry::class),
        GameController::DEFAULT_VIEW        => autowire(Overview::class),
    ],
];
