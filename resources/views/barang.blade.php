@extends('layout')
@section('content')
    <div class="row">
        @foreach ($data as $item)
        <div class="col-md-4">
            <div class="card">
                <?php $url = env('API_URL').$port.DIRECTORY_SEPARATOR.$item['foto'] ?>
                <img src="{{str_replace("\\", "/",$url)}}" alt="">
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">{{strtoupper($item['nama'])}}</div>
                    <div class="card-text">
                        <button class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#updateModal">update</button>
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
                                <td>{{$item['stok']}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal -->
<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- <form action="" method="post"> --}}
                <div class="modal-body">
                    <h2>BELUM BERHASIL</h2>
                        {{ csrf_field() }}
                        <input type="text" name="nama" id="" value="{{$item['nama']}}" placeholder="nama" class="form-control mb-2">
                        <input type="file" name="foto" class="form-control mb-2" />
                        <input type="number" name="harga-jual" id="" value="{{$item['harga_jual']}}" placeholder="harga jual" class="form-control mb-2">
                        <input type="number" name="harga-beli" id="" value="{{$item['harga_beli']}}" placeholder="harga beli" class="form-control mb-2">
                        <input type="number" name="stok" id="" value="{{$item['stok']}}" placeholder="stok" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="submit" class="btn btn-danger">Save changes</button> --}}
                </div>
            {{-- </form> --}}
        </div>
    </div>
</div>
        @endforeach
    </div>
@endsection