@extends('admin.master')

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
                    <a href="{{ route('createDetail_Order') }}" class="btn btn-primary" role="button">Tambah Detail Orders</a>
                </div>
                <div class="card-body p-2">
                    <table class="table-update" id="data-table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>id order</th>
                                <th>id produk</th>
                                <th>nama produk</th>
                                <th>harga</th>
                                <th>kurir</th>
                                <th>jumlah</th>
                                <th>total harga</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_orders as $detail_order)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $detail_order->id_order }}</td>
                                    <td>{{ $detail_order->id_produk }}</td>
                                    <td>{{ $detail_order->nama_produk }}</td>
                                    <td>{{ $detail_order->harga }}</td>
                                    <td>{{ $detail_order->kurir }}</td>
                                    <td>{{ $detail_order->jumlah }}</td>
                                    <td>{{ $detail_order->total_harga }}</td>
                                    <td>
                                        <a href="{{route('editDetail_Order', ['id' => $detail_order->id])}}" class="btn btn-warning btn-sm" role="button">Edit</a>
                                        <a onclick="confirmDelete(this)" data-url="{{route('deleteDetail_Order', ['id' => $detail_order->id])}}" class="btn btn-danger btn-sm" role="button">Hapus</a>
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