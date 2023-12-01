@extends('menu')

@section('container')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
        </ul>
    </div>
@endif

<div class="card mt-4">
	<div class="card-body">

        <h5 class="card-title fw-bolder mb-3">Add Tenant</h5>

		<form method="post" action="{{ route('tenant.store') }}">
			@csrf
            <div class="mb-3">
                <label for="id_tenant" class="form-label">ID Tenant</label>
                <input type="text" class="form-control" id="id_tenant" name="id_tenant">
            </div>
			<div class="mb-3">
                <label for="nama_stand" class="form-label">Nama Stand</label>
                <input type="text" class="form-control" id="nama_stand" name="nama_stand">
            </div>
            <div class="mb-3">
                <label for="harga_sewa" class="form-label">Harga Sewa</label>
                <input type="text" class="form-control" id="harga_sewa" name="harga_sewa">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock">
            </div>
            <div class="mb-3">
                <label for="id_lokasi" class="form-label">ID Lokasi</label>
                <input type="text" class="form-control" id="id_lokasi" name="id_lokasi">
            </div>
            <div class="mb-3">
                <label for="id_jenis" class="form-label">ID Jenis</label>
                <input type="text" class="form-control" id="id_jenis" name="id_jenis">
            </div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>
		</form>
	</div>
</div>

@stop
