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

        <h5 class="card-title fw-bolder mb-3">Changed Jenis</h5>

		<form method="post" action="{{ route('jenis.update', $data->id_jenis) }}">
			@csrf
            <div class="mb-3">
                <label for="id_jenis" class="form-label">ID Jenis</label>
                <input type="text" class="form-control" id="id_jenis" name="id_jenis" value="{{ $data->id_jenis }}">
            </div>
			<div class="mb-3">
                <label for="jenis" class="form-label">Nama Store</label>
                <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $data->jenis }}">
            </div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Ubah" />
			</div>
		</form>
	</div>
</div>

@stop