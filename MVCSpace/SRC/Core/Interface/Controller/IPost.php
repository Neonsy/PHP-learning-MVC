<?php

declare(strict_types=1);

namespace MVCSpace\Core\Interface\Controller;

use MVCSpace\Core\HTTP\Request;
use MVCSpace\Core\HTTP\Response;

interface IPost
{
    public function postAction(Request $request, Response $response, array $params): void;
}