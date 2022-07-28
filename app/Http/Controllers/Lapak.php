<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Lapak extends Controller
{
    public function index()
    {
        $data = DB::table('slider')->limit(1)->get();
        $data1 = DB::table('kategori')->get();
        $data2 = DB::table('barang')->where('kategori', '=', 'p')->get();
        $data3 = DB::table('barang')->where('kategori', '=', 'd')->get();
        return view('welcome', [
            'data' => $data,
            'kategori' => $data1,
            'barang' => $data2,
            'barang2' => $data3
        ]);
    }
    public function detail($slug)
    {
        $data = DB::table('barang')->where('slug', '=', "$slug")->get();
        $data2 = DB::table('barang')->where('kategori', '=', 'p')->get();
        return view('detail', [
            'data' => $data,
            'data_populer' => $data2
        ]);
    }
}
