@extends('layout.tm')

@section('content')
  <!-- ===== Hero Section ===== -->
        <section id="hero" class="relative overflow-hidden py-20 md:py-32 bg-white">
            <div class="absolute inset-0 animated-gradient opacity-10"></div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight mb-4">
                    Kategori Buah
                </h1>
                <p class="text-lg md:text-xl text-slate-600 max-w-3xl mx-auto mb-8">
                    Buah Import And Buah Lokal
                </p>
            </div>
        </section>

        <!-- ===== Form Transaksi Section ===== -->
        <section id="transaksi" class="py-20 bg-slate-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Proses Transaksi Baru</h2>
                    <p class="text-slate-600 mt-2">Buat pesanan baru untuk kategori Anda dengan mudah.</p>
                </div>
                <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <!-- Kolom Form -->
                    <div class="bg-white p-8 rounded-2xl shadow-lg">
                        <h3 class="text-2xl font-bold text-slate-900 mb-6">Detail Pesanan</h3>
                        <form id="transaction-form" class="space-y-6">
                            <div>
                                <label for="customer-select" class="block text-sm font-medium text-slate-600 mb-2">Pilih Supplier</label>
                                <select id="customer-select" class="w-full bg-slate-100 border border-slate-300 text-slate-900 rounded-lg p-3 focus:ring-2 focus:ring-sky-500 focus:border-sky-500">
                                </select>
                            </div>
                            <div>
                                <label for="product-select" class="block text-sm font-medium text-slate-600 mb-2">Pilih Buah</label>
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
