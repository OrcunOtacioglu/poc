<?php

namespace BetterProposals\Http;

class Response
{
    public function __construct(Request $request)
    {
        
    }
    
    public function send()
    {
        echo 'Working!';
    }
}