<?php
require_once __DIR__ . '/vendor/autoload.php';

use BetterProposals\Application;
use App\Controllers\MainController;
use App\Controllers\AuthController;

// Main FrontController directory passed.
$app = new Application(dirname(__DIR__).'/poc');

/**
 * Routes
 */
$app->router->get('/', [MainController::class, 'home']);
$app->router->get('/dashboard', [MainController::class, 'dashboard']);
$app->router->post('/form', [MainController::class, 'handleForm']);

/**
 * Authentication routes.
 */
$app->router->get('/login', [AuthController::class, 'showLogin']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'showRegister']);
$app->router->post('/register', [AuthController::class, 'register']);

// Runs the application.
$app->run();