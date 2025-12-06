@extends('tmlayout.tm
@section('content')
<h3>Data Supplier</h3>

<form method="post" action="/supplier/store">
    @csrf
    <input class="form-control mb-2" type="text" name="nama_supplier" placeholder="Nama supplier">
    <input class="form-control mb-2" type="text" name="alamat" placeholder="Alamat">
    <input class="form-control mb-2" type="text" name="telepon" placeholder="Telepon">
    <button class="btn btn-primary">Simpan</button>
</form>

<hr>

<table class="table table-bordered mt-3">
    <tr class="table-dark">
        <th>No</th><th>Nama</th><th>Alamat</th><th>Telepon</th><th>Aksi</th>
    </tr>

    @foreach($supplier as $s)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $s->nama_supplier }}</td>
        <td>{{ $s->alamat }}</td>
        <td>{{ $s->telepon }}</td>
        <td><a href="/supplier/delete/{{ $s->id }}" class="btn btn-danger btn-sm">Hapus</a></td>
    </tr>
    @endforeach
</table>

@endsection
