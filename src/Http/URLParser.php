<?php

namespace BetterProposals\Http;

class URLParser
{
    protected $request;
    
    protected $routes;
    
    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->routes = include __DIR__ . '/../../routes/web.php';
    }
    
    public function parse()
    {
        if (array_key_exists($this->request->attributes(), $this->routes)) {
            
        }
    }
}