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

        <h5 class="card-title fw-bolder mb-3">Detail Tenant</h5>

			@csrf
            <div class="mb-3">
                <label for="id_tenant" class="form-label">ID Tenant</label>
                <input type="text" class="form-control" id="id_tenant" name="id_tenant" value="{{ $data->id_tenant }}" readonly>
            </div>
			<div class="mb-3">
                <label for="nama_stand" class="form-label">Nama Stand</label>
                <input type="text" class="form-control" id="nama_stand" name="nama_stand" value="{{ $data->nama_stand }}" readonly>
            </div>
            <div class="mb-3">
                <label for="harga_sewa" class="form-label">Harga Sewa</label>
                <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" value="{{ $data->harga_sewa }}" readonly>
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock" value="{{ $data->stock }}" readonly>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}" readonly>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $data->jenis }}" readonly>
            </div>
            <div class="text-center">
            <a href="{{ route('tenant.index') }}" type="button" class="btn btn-primary rounded-3" >Back</a>
			</div>
            <!-- <a href="{{ route('tenant.index') }}" type="button" class="btn btn-primary rounded-3 text-center" >Kembali</a> -->
		</form>
	</div>
</div>

@stop
