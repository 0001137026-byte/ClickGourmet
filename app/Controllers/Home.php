<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function perfil(): string {
        return view('perfil');
    }

    public function receita(): string {
        return view('receita');
    }

    public function sair(): string {
        return view('index');
    }
}
