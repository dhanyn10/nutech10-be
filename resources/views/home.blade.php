@extends('layout')
@section('content')
    @isset($data)
        @foreach ($data as $item)
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <?php $url = env('APP_URL').':'.env('API_PORT').DIRECTORY_SEPARATOR.$item['foto'] ?>
                    <x-image dir="{{$url}}" alt=""/>
                    <div class="card-body">
                        <div class="card-title">{{$item['nama']}}</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endisset
@endsection