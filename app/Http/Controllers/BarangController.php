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
    public function update(Request $request)
    {
        $id         = $request->id;
        $nama       = $request->input('nama');
        $foto       = $request->file('foto');
        $hargajual  = $request->input('harga-jual');
        $hargabeli  = $request->input('harga-beli');
        $stok       = $request->input('stok');
        $response = Http::attach('foto', base64_encode($foto))->put(env('APP_URL').':'.env('API_PORT').'/barang'."/".$request->id, [
            'nama'  => $nama,
            'hargaJual' => $hargajual,
            'hargaBeli' => $hargabeli,
            'stok'      => $stok
        ]);
        
        return redirect()->route('home');
    }
}
