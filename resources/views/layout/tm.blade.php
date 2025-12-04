<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StokPro - Buah Buahan Segar</title>

    <!-- Tailwind CSS via CDN -->
    <link href="./src/output.css" rel="stylesheet">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide-icons@0.378.0/dist/lucide.min.js"></script>

        <!DOCTYPE html>
<html>
<head>
    <title>StokPro - Buah Segar</title>

    <style>
        body {
            background-color: #b3d9ff; /* baby blue */
            margin: 0;
            font-family: Arial;
        }

        nav {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            padding: 15px 25px;
            background: white;
            border-bottom: 1px solid #ddd;
        }

        nav a {
            color: black;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
        }

        .container {
            padding: 25px;
        }
    </style>
</head>

<body>

    <nav>
        <a href="/">Beranda</a>
        <a href="/kategori">Kategori</a>
        <a href="/supplier">Supplier</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
