<?php

namespace App\Controllers;

use BetterProposals\Http\BaseController;

class MainController extends BaseController
{
    /**
     * Homepage.
     */
    public function home()
    {
        $params = [
            'name' => 'Better Proposals',
        ];
        
        return $this->render('home', $params);
    }

    /**
     * Dashboard view.
     */
    public function dashboard()
    {
        return $this->render('dashboard');
    }

    /**
     * Form handle.
     */
    public function handleForm($request)
    {
        $body = $request->all();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit();
    }
}