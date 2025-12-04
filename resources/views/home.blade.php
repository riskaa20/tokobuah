@extends('layout.tm')

@section('content')

<body class="bg-gradient-to-b from-[#CDE8FF] to-[#A6D4FF]">

<!-- ===== Hero Section ===== -->
<section id="hero" class="relative overflow-hidden py-20 md:py-32 bg-white">
    <div class="absolute inset-0 animated-gradient opacity-10"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
        <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight mb-4">
            TOKO BUAH BUAHAN SEGAR
        </h1>
        <p class="text-lg md:text-xl text-slate-600 max-w-3xl mx-auto mb-8"></p>
    </div>
</section>

<!-- ===== Produk E-Commerce Section ===== -->
<section id="produk" class="py-20 bg-slate-100">
    <div class="container mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Semua Buah Tersedia</h2>
            <p class="text-slate-600 mt-2">Ayo nikmati buah buahan segar dari toko kami</p>
        </div>

        <!-- GRID PRODUK -->
        <div id="product-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 25px; margin-top: 30px;">

    @foreach($databuah as $buah)
        <div style="background: white; padding: 15px; border-radius: 10px; box-shadow: 0 0 8px rgba(0,0,0,.1);">

                 <alt="{{ $buah->nama_buah }}"
                 style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px;">

            <h3 style="margin-top: 10px; font-size: 20px;">
                {{ $buah->nama_buah }}
            </h3>

            <p>Rp {{ number_format($buah->harga, 0, ',', '.') }}</p>
            <p>Stok: {{ $buah->stok }}</p>
        </div>
    @endforeach

</div>


        </div> <!-- END GRID -->

    </div>
</section>

<!-- ===== Keranjang Section ===== -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-white p-8 rounded-2xl shadow-lg max-w-2xl mx-auto">

            <h3 class="text-2xl font-bold text-slate-900 mb-6 text-center">Keranjang</h3>

            <div id="transaction-items" class="space-y-4 mb-6 min-h-[150px]">
                <p id="empty-cart-message" class="text-slate-500 text-center pt-10">
                    Keranjang masih kosong...
                </p>
            </div>

            <div class="border-t border-slate-200 pt-4 space-y-4">
                <div class="flex justify-between text-lg font-semibold text-slate-900">
                    <span>Total</span>
                    <span id="total-price">Rp 0</span>
                </div>

                <button
                    id="process-payment-button"
                    class="w-full bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-4 rounded-lg transition-transform duration-300 hover:scale-105 disabled:bg-slate-400 disabled:cursor-not-allowed"
                    disabled>
                    Proses Pembayaran
                </button>
            </div>

        </div>
    </div>
</section>

@endsection
