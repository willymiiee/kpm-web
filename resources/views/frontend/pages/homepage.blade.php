@extends('frontend.layouts.master')

@section('custom-meta')
<meta name="description" content="Kami Merupakan Distributor Produk Makanan dan Minuman Terbesar di Bali" />
@endsection

@section('title')
Distributor Produk Makanan dan Minuman | Bali
@endsection

@section('body')
<div id="home">

    <!-- =============================================
        =============== BANNER SECTION ===============
        ============================================== -->

    <section class="row mx-auto position-relative">
        <div class="banner col-12 col-md-7 offset-md-5 p-0 d-flex flex-column justify-content-center">
            <h1 class="banner-title m-0">PT. Kembar Putra Makmur</h1>
            <p class="banner-subtitle">Distributor Produk Makanan Terbesar di Bali</p>
            <div>
                <a href="{{ url('/about') }}" class="btn outline" role="button">Pelajari Lebih Lanjut</a>
            </div>
        </div>
        <img class="shape-1 position-absolute" src="/img/shape/shape-1.svg">
        <img class="shape-2 position-absolute" src="/img/shape/shape-2.svg">
    </section>

    <!-- ===============================================
        =============== SUPPLIER SECTION ===============
        ================================================ -->

    <section>
        <h2 class="section-title text-center">Principal Terbaik Kami</h2>
        <div class="supplier container">
            <div class="supplier__item" title="PT. Indofood CBP Sukses Makmur Tbk.">
                <img src="/img/supplier/indofood.svg" alt="PT. Indofood CBP Sukses Makmur Tbk.">
            </div>
            <div class="supplier__item" title="PT. Sinar Pangan Sejahtera">
                <img src="/img/supplier/sps-food.jpg" alt="PT. Sinar Pangan Sejahtera" width="130">
            </div>
            <div class="supplier__item" title="PT. Sukanda Djaya">
                <img src="/img/supplier/sukanda-djaya.jpg" alt="PT. Sukanda Djaya" width="130">
            </div>
            <div class="supplier__item" title="PT. Vixon Indonesia">
                <img src="/img/supplier/vixon.png" alt="PT. Vixon Indonesia" width="130">
            </div>
        </div>
        <a href="{{ url('/principal') }}" class="btn fill">Lihat Lebih Banyak</a>
    </section>

    <!-- ==========================================================
        =============== COMPANY DESCRIPTION SECTION ===============
        =========================================================== -->

    <section class="container">
        <div class="content row mx-auto">
            <div class="order-md-1 order-2 col-md-7 d-md-flex justify-content-md-center align-items-md-center">
                <div class="w-75 position-relative">
                    <span class="bg-text position-absolute">J</span>
                    <h2 class="section-title">Jaringan Luas di Pulau Bali</h2>
                    <p>Anda berada di Bali ? Tenang saja ! Kami akan mendistribusikan produk kami
                        kepada anda dimanapun anda berada, telah beroperasi sejak tahun 1980 membuat
                        jaringan yang kami miliki hampir seluas pulau Bali itu sendiri.</p>
                </div>
            </div>
            <div class="order-md-2 order-1 col-md-5 d-flex justify-content-center align-items-center">
                <img src="/img/illustration/network.svg" alt="Vast Network">
            </div>
        </div>
        <div class="content row mx-auto">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <img src="/img/illustration/infrastructure.svg" alt="Vast Network">
            </div>
            <div class="col-md-7 d-flex justify-content-center align-items-center">
                <div class="w-75 position-relative">
                    <span class="bg-text position-absolute">I</span>
                    <h2 class="section-title">Infrastruktur yang Memadai</h2>
                    <p>Kami memiliki banyak infrastruktur yang tersebar di Bali. Hal itu
                        memudahkan proses distribusi ke tempat anda. Kami juga menjamin kualitas produk yang kami
                        sediakan selalu aman untuk dikonsumsi dengan infrastruktur yang kami miliki.</p>
                    <a href="{{ url('/infrastructure') }}" class="btn fill mt-4">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <div class="content row mx-auto d-flex">
            <div class="order-md-1 order-2 col-md-7 d-md-flex justify-content-md-center align-items-md-center">
                <div class="w-75 position-relative">
                    <span class="bg-text position-absolute">S</span>
                    <h2 class="section-title">Sales yang Professional dan Memadai</h2>
                    <p>Kami mempercayai sales sangat berpengaruh dalam menentukan proses
                        distribusi, sales kami sangat professional dan mumpuni dalam menjangkau seluruh daerah di Bali
                        untuk proses distribusi yang lebih lancar.</p>
                </div>
            </div>
            <div class="order-md-2 order-1 col-md-5 d-flex justify-content-center align-items-center">
                <img src="/img/illustration/sales.svg" alt="Vast Network">
            </div>
        </div>
    </section>
    <section>
        <div class="container row mx-auto position-relative py-4">
            <div class="col-4 col-lg-2 my-5 pl-0 pr-lg-0">
                <div class="product-thumbnail col-12 d-flex justify-content-center align-items-center">
                    <img class="product-thumbnail__image" src="/img/products/indomie.png" alt="Indomie">
                </div>
                <div class="product-thumbnail col-12 d-flex justify-content-center align-items-center my-3">
                    <img class="product-thumbnail__image" src="/img/products/snickers.png" alt="Snickers">
                </div>
                <a href="{{ url('/produk') }}">
                    <div class="product-thumbnail col-12 d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <p class="product-thumbnail__text text-center py-1">Lihat Lebih Banyak</p>
                            <img class="product-thumbnail__icon" src="/img/icon/plus-circle.svg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-8 col-lg-7 offset-lg-1 px-0">
                <div class="product-preview d-flex justify-content-center align-items-center mt-5">
                    <img class="product-preview__image" src="/img/products/indomie.png" alt="Indomie">
                    <h3 class="product-preview__name">INDOMIE</h3>
                </div>
            </div>
            <div class="vertical-line"></div>
            <span>Cek Produk yang Kami Tawarkan</span>
        </div>
    </section>
    <section>
        <div class="contact">
            <svg class="contact__icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone-call">
                <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <h2 class="section-title m-0">Hubungi Kami</h2>
            <span class="contact__number">(0361) 9006481<br>(0361) 9006483</span>
        </div>
    </section>
</div>
@endsection
