@extends('menu')

@section('container')

<h4 class="mt-5 text-center">Data Tenant</h4>
<a href="{{ route('tenant.create') }}" type="button" class="btn btn-info rounded-3 mb-3">Add Data</a>

@if($message = Session::get('success'))
    <div class="alert alert-success mt-3" role="alert">
        {{ $message }}
    </div>
@endif

<table id="table_id" class="table table-hover mt-2">
    <thead>
      <tr>
        <th class="text-center">No.</th>
        <th class="text-center">ID Tenant</th>
        <th class="text-center">Nama Stand</th>
        <th class="text-center">Harga Sewa</th>
        <th class="text-center">Stock</th>
        <th class="text-center">ID Lokasi</th>
        <th class="text-center">ID Jenis</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr class="text-center">
                <td>{{$loop->iteration}}</td>
                <td>{{ $data->id_tenant }}</td>
                <td>{{ $data->nama_stand }}</td>
                <td>{{ $data->harga_sewa }}</td>
                <td>{{ $data->stock }}</td>
                <td>{{ $data->id_lokasi }}</td>
                <td>{{ $data->id_jenis }}</td>
                <td class="text-center">
                <a href="{{ route('tenant.show', $data->id_tenant) }}" type="button" class="btn btn-primary rounded-3">Show</a>
                <a href="{{ route('tenant.edit', $data->id_tenant) }}" type="button" class="btn btn-warning rounded-3">Change</a>
                <form action="{{route ('tenant.softDelete', $data->id_tenant)}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Upps, Are you sure ?')">Delete</button>
                </form>
            </tr>
            @endforeach
    </tbody>
</table>
@stop
