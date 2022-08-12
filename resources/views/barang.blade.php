@extends('layout')
@section('content')
    <div class="row">
        @foreach ($data as $item)
        <div class="col-md-4">
            <div class="card">
                <?php $url = env('APP_URL').':'.env('API_PORT').DIRECTORY_SEPARATOR.$item['foto'] ?>
                <x-image dir="{{$url}}" alt=""/>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{strtoupper($item['nama'])}}</div>
                    <div class="card-text">
                        <button class="btn btn-success mb-3">update</button>
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama</th>
                                <td>{{$item['nama']}}</td>
                            </tr>
                            <tr>
                                <th>Harga Jual</th>
                                <td>{{$item['harga_jual']}}</td>
                            </tr>
                            <tr>
                                <th>Harga Beli</th>
                                <td>{{$item['harga_beli']}}</td>
                            </tr>
                            <tr>
                                <th>Stok</th>
                                <td>{{$item['harga_jual']}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection