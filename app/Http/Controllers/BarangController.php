<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BarangController extends Controller
{
    public function show(Request $request)
    {
        $data = [];
        $getData = Http::get(env('APP_URL').':'.env('API_PORT').'/barang'."/".$request->id);
        if($getData['message'] == "success")
        {
            $data = $getData['data'];
        }
        return view('barang', [
            'data'  => $data
        ]);
    }
}
