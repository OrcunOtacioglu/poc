<?php

namespace BetterProposals\Http;

class Request
{
    /**
     * Returns the request path.
     * 
     * @return string
     */
    public function getPath()
    {
        $path = isset($_SERVER['REQUEST_URI']) 
            ? $_SERVER['REQUEST_URI'] 
            : '/';
        $hasQueryParams = strpos($path, '?');
        
        if ($hasQueryParams) {
            return substr($path, 0, $hasQueryParams);
        }

        return $path;
    }

    /**
     * Returns the request method.
     * 
     * @return string
     */
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    /**
     * Returns all request parameters both for get and post actions.
     * 
     * @return array
     */
    public function all()
    {
        $parameterBag = [];
        
        if ($this->getMethod() == 'get') {
            foreach ($_GET as $key => $value) {
                $parameterBag[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if ($this->getMethod() == 'post') {
            foreach ($_POST as $key => $value) {
                $parameterBag[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }
        
        return $parameterBag;
    }
}