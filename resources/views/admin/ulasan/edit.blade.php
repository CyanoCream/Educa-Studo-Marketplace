@extends('admin.master')

@section('content')

<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Edit</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="{{route('daftarUlasan')}}">Dashboard</a></li>
						<li class="breadcrumb-item active">Edit Ulasan</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<form action="{{ route('updateUlasan',['id'=>$ulasan->id]) }}" method="post">
						{{ csrf_field() }}

						<div class="form-group">
							<label for="id_user">id user</label>
							<input type="text" name="id_user" id="id_user" class="form-control" required="required" value="{{ $ulasan->id_user }}" placeholder="Masukkan id user">
						</div>

						<div class="form-group">
							<label for="id_produk">id produk</label>
							<input type="text" name="id_produk" id="id_produk" class="form-control" required="required" value="{{ $ulasan->id_produk }}" placeholder="Masukkan id produk">
						</div>

						<div class="form-group">
							<label for="nama">nama</label>
							<input type="text" name="nama" id="nama" class="form-control" required="required" value="{{ $ulasan->nama }}" placeholder="Masukkan nama">
						</div>

						<div class="form-group">
							<label for="email">email</label>
							<input type="email" name="email" id="email" class="form-control" required="required" value="{{ $ulasan->email }}" placeholder="Masukkan email">
						</div>

						<div class="form-group">
							<label for="penilaian">penilaian</label>
							<textarea name="penilaian" id="penilaian" rows="3" class="form-control" required="required" placeholder="Masukkan penilaian"></textarea>
						</div>

						<div class="text-right">
							<a href="{{ route('daftarUlasan') }}" class="btn btn-outline-secondary mr-2" role="button">Batal</a>
							<button type="submit" onclick="save(this)" class="btn btn-primary">Simpan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    save = function (button) {
        swal({
			title: "Sukses",
			icon: "success",
			button: false,
		});
    }
</script>
@endsection
