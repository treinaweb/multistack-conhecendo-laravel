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
        return view('sobre');
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
