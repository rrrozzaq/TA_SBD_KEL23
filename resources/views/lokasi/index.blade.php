@extends('menu')

@section('container')

<h4 class="mt-5 text-center">Data Lokasi</h4>
<a href="{{ route('lokasi.create') }}" type="button" class="btn btn-info rounded-3">Add Lokasi</a>

@if($message = Session::get('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ $message }}
    </div>
@endif

<table id="table_id" class="table table-hover mt-2">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">ID Lokasi</th>
        <th class="text-center">Alamat</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr class="text-center">
                <td>{{$loop->iteration}}</td>
                <td>{{$data->id_lokasi }}</td>
                <td>{{$data->alamat }}</td>
                <td>
                <a href="{{ route('lokasi.edit', $data->id_lokasi) }}" type="button" class="text-center btn btn-warning rounded-3">Change</a>
                <form action="{{route ('lokasi.delete', $data->id_lokasi)}}" method="post" class="text-center d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Upps, Are you sure?')">Delete</button>
                </form>
                </td>
            </tr>
        @endforeach

            </td>
        </tr>
    </tbody>
</table>
@stop
