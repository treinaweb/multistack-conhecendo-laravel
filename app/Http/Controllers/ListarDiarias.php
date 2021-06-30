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

        return view('listar_diarias')->with('diarias', $diarias);
    }
}
