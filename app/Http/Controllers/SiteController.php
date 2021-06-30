<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    /**
     * página de sobre
     *
     * @return void
     */
    public function sobre()
    {
        $empresa = "Treinaweb Cursos";

        return view('sobre')->with('empresa123', $empresa);
    }

    /**
     * página de contato
     *
     * @return void
     */
    public function contato()
    {
        return view('contato');
    }
}
