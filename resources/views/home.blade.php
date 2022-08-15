@extends('layout')
@section('content')
    @isset($data)
    <div class="row">
        @foreach ($data as $item)
            <div class="col-md-4">
                <div class="card">
                    <?php $url = env('API_URL').$port.DIRECTORY_SEPARATOR.$item['foto'] ?>
                    {{-- <img src="{{DirSeparator::dir($url)}}" alt=""> --}}
                    <img src="{{str_replace("\\", "/",$url)}}" alt="">
                    <div class="card-body">
                        <div class="card-title">{{$item['nama']}}</div>
                        <div class="d-grid">
                            <a class="btn btn-danger" href="{{route('barang', $item['id'])}}">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endisset
@endsection