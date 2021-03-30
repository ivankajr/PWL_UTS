@extends('barangs.layout')
@section('content')
    <<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-3">
                <h2>SISTEM INFORMASI BARANG</h2>
            </div>
            <div class="float-right my-3">
                <div class="row ">
                    <div class="col-sm-auto"><a class="btn btn-success" href="{{ route('barang.create') }}"> Input Barang</a></div>
                </div>    
            </div>
            <div>
                <form class="input-group" action="{{ route('barang.index') }}" method="GET">
                    <input type="text" class="form-control" name="search" placeholder="Search by nama_barang">
                </form>
            </div>
        </div>
    </div>
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<!-- <div class="col-md-4">
    <form action="/search" method="get">
    <div class="form-group">
    <input type="search" name="search" class="form-control">
    <span class="form-group-btn">
        <button type="submit" class="btn btn-primary">Search</button>
    </span>
</div> -->
<table class="table table-bordered">
<tr>
    <th>ID BARANG</th>
    <th>KODE BARANG</th>
    <th>NAMA BARANG</th>
    <th>KATEGORI BARANG</th>
    <th>HARGA</th>
    <th>QTY</th>
    <th width="280px">Action</th>
</tr>
    @if (count($posts) > 0)
            @foreach ($posts as $Barang)
            <tr>
                <td>{{ $Barang->id_barang }}</td>
                <td>{{ $Barang->kode_barang }}</td>
                <td>{{ $Barang->nama_barang }}</td>
                <td>{{ $Barang->kategori_barang }}</td>
                <td>{{ $Barang->harga }}</td>
                <td>{{ $Barang->qty }}</td>
                <td>
                <form action="{{ route('barang.destroy',$Barang->id_barang) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('barang.show',$Barang->id_barang) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('barang.edit',$Barang->id_barang) }}">Edit</a>
                        @csrf 
                        @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        @else 
            <div class="float-left my-2">
                <h5 class="text-danger">Barang Not Found !</h4>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success mt-3" href="{{ route('barang.index') }}">Kembali</a> 
            </div>
        @endif
    </table>
    <div class="d-flex float-none">
        {{$posts->links('pagination::bootstrap-4')}}
    </div>
@endsection