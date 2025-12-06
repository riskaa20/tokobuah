@extends('layout.tm')

@section('content')
<h3>Data Kategori</h3>

<form method="post" action="/kategori/store">
    @csrf
    <input class="form-control mb-2" type="text" name="nama_kategori" placeholder="Nama kategori">
    <button class="btn btn-primary">Simpan</button>
</form>

<hr>

<table class="table table-bordered mt-3">
    <tr class="table-dark">
        <th>No</th><th>Nama</th><th>Aksi</th>
    </tr>

    @foreach($kategori as $k)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $k->nama_kategori }}</td>
        <td><a href="/kategori/delete/{{ $k->id }}" class="btn btn-danger btn-sm">Hapus</a></td>
    </tr>
    @endforeach
</table>

@endsection
