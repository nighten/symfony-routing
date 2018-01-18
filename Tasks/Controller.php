<?php

namespace SymfonyTasks\Routing\Tasks;

use SymfonyTasks\Routing\Common\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class Controller extends AbstractController
{
    public function __invoke(Request $request): Response
    {
        return parent::action($request);
    }
}
