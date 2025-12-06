@extends('layout.tm')

@section('content')
<h3>Data Buah</h3>

<form method="post" action="/buah/store">
    @csrf
    <input class="form-control mb-2" type="text" name="nama_buah" placeholder="Nama buah">

    <select class="form-control mb-2" name="id_kategori">
        <option>Pilih Kategori</option>
        @foreach ($kategori as $k)
            <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
        @endforeach
    </select>

    <select class="form-control mb-2" name="id_supplier">
        <option>Pilih Supplier</option>
        @foreach ($supplier as $s)
            <option value="{{ $s->id }}">{{ $s->nama_supplier }}</option>
        @endforeach
    </select>

    <input class="form-control mb-2" type="number" name="stok" placeholder="Stok">
    <input class="form-control mb-2" type="number" name="harga" placeholder="Harga">

    <button class="btn btn-primary">Simpan</button>
</form>

<hr>

<table class="table table-bordered mt-3">
    <tr class="table-dark">
        <th>No</th><th>Buah</th><th>Kategori</th><th>Supplier</th><th>Stok</th><th>Harga</th><th>Aksi</th>
    </tr>

    @foreach($buah as $b)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $b->nama_buah }}</td>
        <td>{{ $b->kategori->nama_kategori }}</td>
        <td>{{ $b->supplier->nama_supplier }}</td>
        <td>{{ $b->stok }}</td>
        <td>{{ $b->harga }}</td>
        <td>
            <a href="/buah/delete/{{ $b->id }}" class="btn btn-danger btn-sm">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
