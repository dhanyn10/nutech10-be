<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function show()
    {
        $data = [];
        $port = null;
        if(!(str_contains(env('API_URL'), 'heroku')))
        {
            $port = ':'.env('API_PORT');
        }
        $getData = Http::get(env('API_URL').$port.'/barang');

        if($getData['message'] == "success")
        {
            $data = $getData['data'];
        }
        return view('home', [
            'data'  => $data,
            'port'  => $port
        ]);
    }
}
