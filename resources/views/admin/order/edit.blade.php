@extends('admin.layout')

@section('content')

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Edit</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right d-flex">
						<li class="breadcrumb-item" style="align-items: center; display: flex;"><a href="{{route('daftarOrder')}}">Dashboard</a></li>
						<li class="breadcrumb-item active" style="align-items: center; display: flex;">Edit Order</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updateOrder',['id'=>$order->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="id_pelanggan">id_pelanggan</label>
							<input type="text" name="id_pelanggan" id="id_pelanggan" class="form-control" required="required" value="{{ $order->id_pelanggan }}" placeholder="Masukkan id_pelanggan">
						</div>

						<div class="form-group">
							<label for="status_order">status_order</label>
<<<<<<< HEAD
							<input type="text" name="status_order" id="status_order" class="form-control" required="required" value="{{ $order->status_order }}" placeholder="Masukkan status_order">
=======
							<select class="form-control" name="status_order" id="status_order">
								<option>0</option>
								<option>1</option>
							</select>
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c
						</div>

						<div class="form-group">
							<label for="id_produk">id_produk</label>
<<<<<<< HEAD
							<input type="text" name="id_produk" id="id_produk" class="form-control" required="required" value="{{ $order->id_produk }}" placeholder="Masukkan id_produk">
=======
							<select class="form-control" name="id_produk" id="id_produk">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
>>>>>>> 8a8b1e0d3fb23705eeedc5f741612dcae2a73a3c
						</div>

						<div class="form-group">
							<label for="id_penyelenggara">id_penyelenggara</label>
							<input type="text" name="id_penyelenggara" id="id_penyelenggara" class="form-control" required="required" value="{{ $order->id_penyelenggara }}" placeholder="Masukkan id_penyelenggara">
						</div>

						<div class="form-group">
							<label for="pengiriman">pengiriman</label>
							<input type="text" name="pengiriman" id="pengiriman" class="form-control" required="required" value="{{ $order->pengiriman }}" placeholder="Masukkan pengiriman">
						</div>

						<div class="form-group">
							<label for="kurir">kurir</label>
							<input type="text" name="kurir" id="kurir" class="form-control" required="required" value="{{ $order->kurir }}" placeholder="Masukkan kurir">
						</div>

                        <div class="form-group">
							<label for="alamat_pen">alamat_pen</label>
							<input type="text" name="alamat_pen" id="alamat_pen" class="form-control" required="required" value="{{ $order->alamat_pen }}" placeholder="Masukkan alamat_pen">
						</div>

                        <div class="form-group">
							<label for="provinsi_pen">provinsi_pen</label>
							<input type="text" name="provinsi_pen" id="provinsi_pen" class="form-control" required="required" value="{{ $order->kurir }}" placeholder="Masukkan kurir">
						</div>

                        <div class="form-group">
							<label for="kota_pen">kota_pen</label>
							<input type="text" name="kota_pen" id="kota_pen" class="form-control" required="required" value="{{ $order->kota_pen }}" placeholder="Masukkan kota_pen">
						</div>

                        <div class="form-group">
							<label for="kecamatan_pen">kecamatan_pen</label>
							<input type="text" name="kecamatan_pen" id="kecamatan_pen" class="form-control" required="required" value="{{ $order->kecamatan_pen }}" placeholder="Masukkan kecamatan_pen">
						</div>

						<div class="text-right">
							<a href="{{ route('daftarOrder') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
