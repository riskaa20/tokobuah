@extends('layout.tm')

@section('content')
  <!-- ===== Hero Section ===== -->
        <section id="hero" class="relative overflow-hidden py-20 md:py-32 bg-white">
            <div class="absolute inset-0 animated-gradient opacity-10"></div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight mb-4">
                    Penjualan Buah
                </h1>
                <p class="text-lg md:text-xl text-slate-600 max-w-3xl mx-auto mb-8">
                    Kelola data buah, pantau supplier, dan proses transaksi dengan cepat dalam satu platform modern yang intuitif.
                </p>
                <a href="#transaksi" class="bg-sky-500 text-white font-bold px-8 py-4 rounded-lg text-lg hover:bg-sky-600 transition-transform duration-300 hover:scale-105 inline-block">
                    Mulai Transaksi
                </a>
            </div>
        </section>

        <!-- ===== Produk E-Commerce Section ===== -->


        <section id="produk" class="py-20 bg-slate-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Daftar Kategori Buah Tersedia</h2>
                    <p class="text-slate-600 mt-2">Jelajahi dan kelola semua buah buahan Anda di sini.</p>
                </div>
                <div id="product-list" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                    @foreach ($databuah as $buah)
                        <!-- Produk 1 -->
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                            <img src="C:\Users\acer\Downloads\Fruit From Old World - Grapes.jpeg"alt="Buah Anggur"
                                class="w-full h-48 object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $buah->nama }}</h3>
                                <p class="text-sky-500 font-semibold text-lg mb-2">{{ $buah->harga }}</p>
                                <p class="text-slate-500">Stok: <span>{{ $buah->stok }}</span></p>
                            </div>
                        </div>
                    @endforeach
                    </section>


        <!-- ===== Statistik Section ===== -->
        <section id="stats" class="py-20">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Statistik Bisnis Anda</h2>
                    <p class="text-slate-600 mt-2">Pantau performa bisnis Anda secara real-time.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-white">
                    <div class="bg-gradient-to-br from-purple-600 to-indigo-600 p-8 rounded-2xl shadow-lg flex items-center gap-6">
                        <i data-lucide="dollar-sign" class="w-12 h-12"></i>
                        <div>
                            <p class="text-4xl font-bold">Rp 12.5M</p>
                            <p class="text-indigo-200">Total Penjualan</p>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-sky-500 to-cyan-500 p-8 rounded-2xl shadow-lg flex items-center gap-6">
                        <i data-lucide="users" class="w-12 h-12"></i>
                        <div>
                            <p class="text-4xl font-bold">1,204</p>
                            <p class="text-cyan-200">Pelanggan Aktif</p>
                        </div>
                    </div>
                    <div class="bg-gradient-to-br from-emerald-500 to-teal-500 p-8 rounded-2xl shadow-lg flex items-center gap-6">
                        <i data-lucide="package-check" class="w-12 h-12"></i>
                        <div>
                            <p class="text-4xl font-bold">8,921</p>
                            <p class="text-teal-200">Barang Terjual</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Form Transaksi Section ===== -->
        <section id="transaksi" class="py-20 bg-slate-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Proses Transaksi Baru</h2>
                    <p class="text-slate-600 mt-2">Buat pesanan baru untuk pelanggan Anda dengan mudah.</p>
                </div>
                <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Kolom Form -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h3 class="text-2xl font-bold text-slate-900 mb-6">Detail Pesanan</h3>
                        <form id="transaction-form" class="space-y-6">
                            <div>
                                <label for="customer-select" class="block text-sm font-medium text-slate-600 mb-2">Pilih Pelanggan</label>
                                <select id="customer-select" class="w-full bg-slate-100 border border-slate-300 text-slate-900 rounded-lg p-3 focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                                </select>
                            </div>
                            <div>
                                <label for="product-select" class="block text-sm font-medium text-slate-600 mb-2">Pilih Produk</label>
                                <select id="product-select" class="w-full bg-slate-100 border border-slate-300 text-slate-900 rounded-lg p-3 focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                                </select>
                            </div>
                            <div>
                                <label for="quantity-input" class="block text-sm font-medium text-slate-600 mb-2">Jumlah</label>
                                <input type="number" id="quantity-input" value="1" min="1" class="w-full bg-slate-100 border border-slate-300 text-slate-900 rounded-lg p-3 focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                            </div>
                            <button type="submit" class="w-full bg-sky-500 hover:bg-sky-600 text-white font-bold py-3 px-4 rounded-lg flex items-center justify-center gap-2 transition-transform duration-300 hover:scale-105">
                                <i data-lucide="plus-circle" class="w-5 h-5"></i>
                                Tambah Barang
                            </button>
                        </form>
                    </div>

                    <!-- Kolom Keranjang -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                         <h3 class="text-2xl font-bold text-slate-900 mb-6">Keranjang</h3>
                         <div id="transaction-items" class="space-y-4 mb-6 min-h-[150px]">
                            <p id="empty-cart-message" class="text-slate-500 text-center pt-10">Keranjang masih kosong...</p>
                         </div>
                         <div class="border-t border-slate-200 pt-4 space-y-4">
                              <div class="flex justify-between text-lg font-semibold text-slate-900">
                                  <span>Total</span>
                                  <span id="total-price">Rp 0</span>
                              </div>
                              <button id="process-payment-button" class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-4 rounded-lg transition-transform duration-300 hover:scale-105 disabled:bg-slate-400 disabled:cursor-not-allowed" disabled>
                                  Proses Pembayaran
                              </button>
                         </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
