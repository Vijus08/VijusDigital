<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class controladorbd extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $pedidos = DB::table('pedidos')->get();

        return view('pedidos', compact('pedidos'));
    }
}
