<!DOCTYPE html>
<html>
<head>
    <title>Toko Buah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="/">TOKO BUAH</a>
        <div>
            <a class="btn btn-outline-light" href="/buah">Buah</a>
            <a class="btn btn-outline-light" href="/kategori">Kategori</a>
            <a class="btn btn-outline-light" href="/supplier">Supplier</a>
        </div>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
