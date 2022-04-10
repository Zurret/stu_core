<?php

declare(strict_types=1);

namespace Stu\Module\Ship\Action\RenameCrew;

use Stu\Lib\Request\CustomControllerHelperTrait;

final class RenameCrewRequest implements RenameCrewRequestInterface
{
    use CustomControllerHelperTrait;

    public function getName(int $crewId): string
    {
        return $this->tidyString(
            $this->queryParameter('rn_crew_'.$crewId.'_value')->string()->defaultsToIfEmpty('')
        );
    }
}
