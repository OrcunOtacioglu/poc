<?php

namespace BetterProposals\Http;

use BetterProposals\Application;

class Router
{
    public $request;
    
    protected $routes;
    
    protected $response;

    /**
     * Router constructor.
     * 
     * @param $request
     * @param $response
     */
    public function __construct($request, $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * Adds get route.
     * 
     * @param $path
     * @param $callback
     */
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * Adds post route.
     * 
     * @param $path
     * @param $callback
     */
    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    /**
     * Resolves the defined route.
     * 
     * @return array|false|mixed|string|string[]
     */
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = isset($this->routes[$method][$path]) 
            ? $this->routes[$method][$path] 
            : false;
        
        if (!$callback) {
            $this->response->setStatusCode(404);
            return $this->render('_404');
        }
        
        if (is_string($callback)) {
            return $this->render($callback);
        }
        
        if (is_array($callback)) {
            $callback[0] = new $callback[0]();
        }
        
        return call_user_func($callback, $this->request);
    }

    /**
     * Render function.
     * 
     * @param $view
     * @param array $params
     * @return array|false|string|string[]
     */
    public function render($view, $params = [])
    {
        $layout = $this->getLayout();
        $content = $this->renderView($view, $params);

        return str_replace('{{content}}', $content, $layout);
    }

    /**
     * Renders the layout.
     * 
     * @return false|string
     */
    protected function getLayout()
    {
        ob_start();
        include_once Application::$ROOT_DIR . "/views/layouts/main.php";
        
        return ob_get_clean();
    }

    /**
     * Renders the view with the layout.
     * 
     * @param $view
     * @param $params
     * @return false|string
     */
    protected function renderView($view, $params)
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        
        ob_start();
        include_once Application::$ROOT_DIR . "/views/$view.php";
        
        return ob_get_clean();
    }
}