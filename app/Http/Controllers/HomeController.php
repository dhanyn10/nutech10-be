<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function show()
    {
        $data = [];
        $getData = Http::get(env('APP_URL').':'.env('API_PORT').'/barang');

        if($getData['message'] == "success")
        {
            $data = $getData['data'];
        }
        return view('home', [
            'data' => $data
        ]);
    }
}
