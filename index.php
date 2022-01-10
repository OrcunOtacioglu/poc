<?php
require_once __DIR__ . '/vendor/autoload.php';

use BetterProposals\Application;
use App\Controllers\MainController;

// Main FrontController directory passed.
$app = new Application(dirname(__DIR__).'/poc');

/**
 * Routes
 */
$app->router->get('/', [MainController::class, 'home']);
$app->router->get('/dashboard', [MainController::class, 'dashboard']);
$app->router->post('/form', [MainController::class, 'handleForm']);

// Runs the application.
$app->run();