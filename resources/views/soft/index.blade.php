@extends('menu')

@section('container')
<h4 class="mt-5 text-center">Data Tenant Terhapus</h4>

<table id="table_id" class="table table-hover mt-2">
    <thead>
      <tr>
        <th>No.</th>
        <th>ID Tenant</th>
        <th>Nama Stand</th>
        <th>Harga Sewa</th>
        <th>Stock</th>
        <th>Alamat</th>
        <th>Jenis</th>
        <th>Tanggal Terhapus</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{ $data->id_tenant }}</td>
                <td>{{ $data->nama_stand }}</td>
                <td>{{ $data->harga_sewa }}</td>
                <td>{{ $data->stock }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->jenis }}</td>
                <td>{{ $data->deleted_at }}</td>
                <td>
                <a href="{{ route('tenant.restore', $data->id_tenant) }}" type="button" class="btn btn-warning rounded-3">Restore</a>
                <form action="{{ route('tenant.hardDelete', $data->id_tenant) }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Upps, Are you sure ?')">Delete</button>
                </form>
            </tr>
            @endforeach
    </tbody>
</table>
@stop
