@extends('admin.layout')

@section('content')

<style>
    .table-update {
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }
  
  .table-update td, .table-update th {
    border: 1px solid #ddd;
    padding: 5px;
  }
  
  .table-update tr:nth-child(even){background-color: #f2f2f2;}
  
  .table-update tr:hover {background-color: #ddd;}
  
  .table-update th {
    padding-top: 10px;
    padding-bottom: 10px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
</style>
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header text-right">
                    <a href="{{ route('createKeranjang') }}" class="btn btn-primary" role="button">Tambah Keranjang</a>
                </div>
                <div class="card-body p-0">
                    <table class="table-update" id="data-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>id_produk</th>
                                <th>qty_ker</th>
                                <th>waktu</th>
                                <th>harga_produk</th>
                                <th>packing</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($keranjangs as $keranjang)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $keranjang->id_produk }}</td>
                                    <td>{{ $keranjang->qty_ker }}</td>
                                    <td>{{ $keranjang->waktu }}</td>
                                    <td>{{ $keranjang->harga_produk }}</td>
                                    <td>{{ $keranjang->packing }}</td>
                                    <td>
                                        <a href="{{route('editKeranjang', ['id' => $keranjang->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                        <a onclick="confirmDelete(this)" data-url="{{route('deleteKeranjang', ['id' => $keranjang->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('addCss')
<link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
@endsection

@push('script')
<script src="{{ asset('js2/sweetalert.min.js') }}"></script>
<script>
    $(function() {
        $("#data-table").DataTable();
    })

    confirmDelete = function(button) {
        var url = $(button).data('url');
        swal({
            'title': 'Konfirmasi Hapus',
            'text': 'Apakah kamu yakin ingin menghapus data ini?',
            'dangerMode': true,
            'buttons': true
        }).then(function(value) {
            if (value) {
                window.location = url;
            }
        })
    }

    
</script>
@endpush