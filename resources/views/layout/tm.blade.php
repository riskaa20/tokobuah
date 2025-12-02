<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StokPro - Dasbor Manajemen Stok & Transaksi</title>

    <!-- Tailwind CSS via CDN -->
    <link href="./src/output.css" rel="stylesheet">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide-icons@0.378.0/dist/lucide.min.js"></script>

    <style>
        /* Menggunakan font Inter sebagai default */
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Animasi Latar Belakang Gradien yang Halus */
        .animated-gradient {
            background: linear-gradient(-45deg, #4f46e5, #7c3aed, #0ea5e9, #14b8a6);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Animasi untuk notifikasi */
        @keyframes fadeInOut {
            0%, 100% { opacity: 0; transform: translateY(-20px); }
            10%, 90% { opacity: 1; transform: translateY(0); }
        }

        .notification {
            animation: fadeInOut 4s ease-in-out forwards;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

    <!-- Notifikasi Global -->
    <div id="notification-container" class="fixed top-5 right-5 z-50"></div>

    <!-- ===== Header & Navbar ===== -->
    <header class="bg-white/80 backdrop-blur-lg sticky top-0 z-40 border-b border-slate-200">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-slate-900 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-boxes text-sky-500"><path d="M2 7V5a2 2 0 0 1 2-2h2"/><path d="M22 7V5a2 2 0 0 0-2-2h-2"/><path d="M2 17v2a2 2 0 0 0 2 2h2"/><path d="M22 17v2a2 2 0 0 1-2 2h-2"/><rect width="14" height="6" x="5" y="2"/><rect width="14" height="6" x="5" y="16"/><path d="M5 12h14"/></svg>
                StokPro
            </a>
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ route('home') }}" class="text-slate-600 hover:text-sky-500 transition-colors duration-300">Beranda</a>
                <a href="{{ route('produk') }}" class="text-slate-600 hover:text-sky-500 transition-colors duration-300">Produk</a>
                <a href="{{ route('pelanggan') }}" class="text-slate-600 hover:text-sky-500 transition-colors duration-300">Pelanggan</a>

            </div>
            <div class="flex items-center gap-4">
                 <a href="#" class="hidden md:block bg-sky-500 hover:bg-sky-600 text-white font-semibold px-5 py-2 rounded-lg transition-transform duration-300 hover:scale-105">
                    Login
                </a>
                <button id="mobile-menu-button" class="md:hidden text-slate-800">
                    <i data-lucide="menu"></i>
                </button>
            </div>
        </nav>
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-6 pb-4 flex flex-col space-y-4">
            <a href="{{ route('home') }}" class="text-slate-600 hover:text-sky-500 transition-colors duration-300">Beranda</a>
            <a href="{{ route('produk') }}" class="text-slate-600 hover:text-sky-500 transition-colors duration-300">Produk</a>
            <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white font-semibold px-5 py-2 rounded-lg text-center">Login</a>
        </div>
    </header>

    <main>

      @yield('content')

    </main>

    <!-- ===== Footer ===== -->
    <footer class="bg-slate-200">
        <div class="container mx-auto px-6 py-8 text-center text-slate-600">
            <p>&copy; 2024 StokPro. Dibuat dengan cinta untuk manajemen yang lebih baik.</p>
        </div>
    </footer>

</body>
</html>
