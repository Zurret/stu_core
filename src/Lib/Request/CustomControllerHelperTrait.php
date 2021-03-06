<?php

declare(strict_types=1);

namespace Stu\Lib\Request;

use MPScholten\RequestParser\BaseControllerHelperTrait;

trait CustomControllerHelperTrait
{
    use BaseControllerHelperTrait;

    public function __construct()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $request = $_GET;
        } else {
            $request = $_POST;
        }
        $this->initRequestParser($request);
    }

    final protected function createRequestParserFactory($request, $config)
    {
        return new CustomRequestParserFactory($request, $config);
    }

    protected function tidyString($string): string
    {
        return trim(
            str_replace(
                ['<', '>', '&gt;', '&lt;'],
                '',
                strip_tags($string)
            )
        );
    }
}
