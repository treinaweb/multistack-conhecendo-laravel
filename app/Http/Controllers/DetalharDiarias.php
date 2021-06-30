<?php

namespace App\Http\Controllers;

use App\Models\Diaria;

class DetalharDiarias extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(int $id)
    {
        $diaria = Diaria::findOrFail($id);

        dd($diaria->nome_cliente);
    }
}
