<?php

namespace App\Http\Controllers;

use App\Models\Diaria;

class ListarDiarias extends Controller
{
    /**
     * Lista de diárias
     *
     * @return void
     */
    public function __invoke()
    {
        $diarias = Diaria::get();

        dd($diarias);

        return view('welcome');
    }
}
