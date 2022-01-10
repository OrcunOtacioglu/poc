<?php

namespace BetterProposals;

use BetterProposals\Http\Router;
use BetterProposals\Http\Request;
use BetterProposals\Http\Response;

class Application
{
    public static $ROOT_DIR;
    
    public $request;
    
    public $response;

    public $router;
    
    public $defaultTemplate = 'main';
    
    public static $app;
    
    public function __construct($root)
    {
        self::$ROOT_DIR = $root;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }
    
    public function run()
    {
        echo $this->router->resolve();
    }
}