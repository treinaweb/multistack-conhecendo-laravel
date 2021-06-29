<?php

namespace App\Http\Controllers;


class ListarDiarias extends Controller
{
    /**
     * Lista de diárias
     *
     * @return void
     */
    public function __invoke()
    {
        return view('welcome');
    }
}
