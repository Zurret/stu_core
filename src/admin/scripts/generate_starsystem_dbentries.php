<?php

use Stu\Component\Database\DatabaseCategoryTypeEnum;
use Stu\Component\Database\DatabaseEntryTypeEnum;
use Stu\Orm\Repository\DatabaseCategoryRepositoryInterface;
use Stu\Orm\Repository\DatabaseEntryRepositoryInterface;
use Stu\Orm\Repository\DatabaseTypeRepositoryInterface;
use Stu\Orm\Repository\StarSystemRepositoryInterface;

require_once __DIR__.'/../../Config/Bootstrap.php';

$repository = $container->get(DatabaseEntryRepositoryInterface::class);
$type = $container->get(DatabaseTypeRepositoryInterface::class)->find(DatabaseEntryTypeEnum::DATABASE_TYPE_STARSYSTEM);
$category = $container->get(DatabaseCategoryRepositoryInterface::class)->find(DatabaseCategoryTypeEnum::DATABASE_CATEGORY_STARSYSTEM);

$result = $container->get(StarSystemRepositoryInterface::class)->getWithoutDatabaseEntry();
foreach ($result as $obj) {
    $db = $repository->prototype();
    $db->setCategory($category);
    $db->setDescription($obj->getName());
    $db->setData('');
    $db->setTypeObject($type);
    $db->setSort($obj->getId());
    $db->setObjectId($obj->getId());

    $repository->save($db);

    $obj->setDatabaseId($db->getId());
    $obj->save();
}
