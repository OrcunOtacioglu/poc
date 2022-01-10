<?php

namespace BetterProposals\Http;

class Response
{
    /**
     * Sets the status code.
     * 
     * @param $statusCode
     */
    public function setStatusCode($statusCode)
    {
        http_response_code($statusCode);
    }
}