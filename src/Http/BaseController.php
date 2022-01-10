<?php

namespace BetterProposals\Http;

use BetterProposals\Application;

class BaseController
{
    /**
     * Renders the view.
     * 
     * @param $view
     * @param array $params
     * @return array|false|string|string[]
     */
    public function render($view, $params = [])
    {
        return Application::$app->router->render($view, $params);
    }
}