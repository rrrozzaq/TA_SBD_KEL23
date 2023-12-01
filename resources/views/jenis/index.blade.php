@extends('menu')

@section('container')

<h4 class="mt-5 text-center">Data Jenis</h4>
<a href="{{ route('jenis.create') }}" type="button" class="btn btn-info rounded-3">Add Jenis</a>

@if($message = Session::get('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ $message }}
    </div>
@endif

<table id="table_id" class="table table-hover mt-2">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">ID Jenis</th>
        <th class="text-center">Jenis</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr class="text-center">
                <td>{{$loop->iteration}}</td>
                <td>{{ $data->id_jenis }}</td>
                <td>{{ $data->jenis }}</td>
                <td>
                <a href="{{ route('jenis.edit', $data->id_jenis) }}" type="button" class="btn btn-warning rounded-3">Change</a>
                <form action="{{route ('jenis.delete', $data->id_jenis)}}" method="post" class="d-inline">
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
