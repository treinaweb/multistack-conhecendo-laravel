<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
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
