<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index', [
            'title' => 'Home',
            'content' => 'Welcome to the home page!'
        ]);
    }
}
