<?php

namespace App\Http\Controllers;


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
        echo "o valor passado é $id";
    }
}
