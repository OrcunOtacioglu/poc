<?php

namespace BetterProposals\Http;

use BetterProposals\Application;

class BaseController
{
    public $layout = 'main';

    /**
     * Sets the default layout for the controller.
     * 
     * @param $layout
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
    }
    
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