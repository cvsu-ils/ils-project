<?php

namespace IntegratedLibrarySystem\App\Middlewares;

use InfinityBrackets\Middlewares\BaseMiddleware;

class TestMiddleware extends BaseMiddleware {

    public array $actions = [];

    public function __construct(array $actions = []) {
        $this->actions = $actions;
    }

    public function execute() {
        // Rule here...
    }
}