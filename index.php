<?php
require_once __DIR__ . '/vendor/autoload.php';

use BetterProposals\Http\Request;
use BetterProposals\Http\Response;

$request = new Request();
$response = new Response($request);

$response->send();