<?php

namespace BetterProposals\Http;

class Request
{
    protected $query;

    protected $request;
    
    protected $attributes;
    
    protected $cookies;
    
    protected $files;
    
    protected $server;
    
    protected $content;
    
    public function __construct()
    {
        $this->query = $_GET;
        $this->request = $_POST;
        $this->attributes = isset($_SERVER['PATH_INFO']) 
            ? $_SERVER['PATH_INFO'] 
            : '/';
        $this->cookies = $_COOKIE;
        $this->files = $_FILES;
        $this->server = $_SERVER;
        $this->content = null;
    }
    
    public function query($queryParameterName)
    {
        if (array_key_exists($queryParameterName, $this->query)) {
            return $this->query[$queryParameterName];
        }
        
        return null;
    }
    
    public function request($requestParameterName)
    {
        if (array_key_exists($requestParameterName, $this->query)) {
            return $this->request[$requestParameterName];
        }

        return null;
    }
    
    public function attributes()
    {
        return $this->attributes;
    }
    
    public function cookies($cookieName = null)
    {
        if ($cookieName !== null && array_key_exists($cookieName, $this->cookies)) {
            return $this->cookies[$cookieName];
        }
        
        if ($cookieName == null) {
            return $this->cookies;
        }
        
        return null;
    }
}