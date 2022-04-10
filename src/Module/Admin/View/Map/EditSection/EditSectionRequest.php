<?php

declare(strict_types=1);

namespace Stu\Module\Admin\View\Map\EditSection;

use Stu\Component\Map\MapEnum;
use Stu\Lib\Request\CustomControllerHelperTrait;

final class EditSectionRequest implements EditSectionRequestInterface
{
    use CustomControllerHelperTrait;

    public function getXCoordinate(): int
    {
        return $this->getCoordinate(
            $this->queryParameter('x')->int()->required(),
            MapEnum::MAP_MAX_X
        );
    }

    public function getYCoordinate(): int
    {
        return $this->getCoordinate(
            $this->queryParameter('y')->int()->required(),
            MapEnum::MAP_MAX_Y
        );
    }

    public function getSectionId(): int
    {
        return $this->queryParameter('sec')->int()->required();
    }

    private function getCoordinate(int $value, int $max_value): int
    {
        return max(1, min($value, $max_value));
    }
}
