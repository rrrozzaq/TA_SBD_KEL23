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

        <h5 class="card-title fw-bolder mb-3">Changed Lokasi</h5>

		<form method="post" action="{{ route('lokasi.update', $data->id_lokasi) }}">
			@csrf
            <div class="mb-3">
                <label for="id_lokasi" class="form-label">ID Lokasi</label>
                <input type="text" class="form-control" id="id_lokasi" name="id_lokasi" value="{{ $data->id_lokasi }}">
            </div>
			<div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
            </div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Ubah" />
			</div>
		</form>
	</div>
</div>

@stop