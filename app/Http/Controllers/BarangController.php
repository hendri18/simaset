<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Show the barang page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $years = range(1900, strftime("%Y", time()));
        arsort($years);
        return view('pages/barang', ['years' => $years]);
    }
}
