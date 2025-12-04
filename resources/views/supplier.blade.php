@extends('layout.tm')

@section('content')
  <!-- ===== Hero Section ===== -->
        <section id="hero" class="relative overflow-hidden py-20 md:py-32 bg-white">
            <div class="absolute inset-0 animated-gradient opacity-10"></div>
            <div class="container mx-auto px-6 text-center relative z-10">
                <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight mb-4">
                    Data perusahaan buah
                </h1>
                <p class="text-lg md:text-xl text-slate-600 max-w-3xl mx-auto mb-8">
                    berikut ini list data perusahaan yang menjadi supplier buah disini
                </p>
            </div>
        </section>

        <!-- ===== Produk E-Commerce Section ===== -->


        <section id="produk" class="py-20 bg-slate-100">
            <div class="container mx-auto px-6">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Daftar Supplier Tersedia</h2>
                </div>
                <div id="product-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    @foreach ($datasupplier as $supplier)
                        <!-- Produk 1 -->
                        <div
                            class="bg-white rounded-2xl overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300">
                            <div class="p-6">
                                <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $supplier->Nama_supplier }}</h3>
                                <p class="text-sky-500 font-semibold text-lg mb-2">{{ $supplier->kontak }}</p>
                            </div>
                        </div>
                    @endforeach
                    </section>

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
