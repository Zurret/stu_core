<?php

namespace Stu\Orm\Entity;

interface PrivateMessageFolderInterface
{
    public function getId(): int;

    public function getUserId(): int;

    public function getUser(): UserInterface;

    public function setUser(UserInterface $user): PrivateMessageFolderInterface;

    public function getDescription(): string;

    public function setDescription(string $description): PrivateMessageFolderInterface;

    public function getSort(): int;

    public function setSort(int $sort): PrivateMessageFolderInterface;

    public function getSpecial(): int;

    public function setSpecial(int $special): PrivateMessageFolderInterface;

    public function getCategoryCount(): int;

    public function getCategoryCountNew(): int;

    public function appendToSorting(): void;

    public function isPMOutDir(): bool;

    public function isDropable(): bool;

    public function isDeleteAble(): bool;
}
