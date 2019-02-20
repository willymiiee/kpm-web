@extends('frontend.layouts.master')

@section('title')
Tentang Kami
@endsection

@section('body')
<div class="about">
    <header class="page-header">
        <div class="container">
            <h1 class="page-header__title">Tentang Kami</h1>
        </div>
    </header>
    <div class="content content-1 container row mx-auto">
        <div class="col-lg-5 d-flex justify-content-center align-items-center">
            <div class="bg-shadow">
                <img src="/img/background/contact_desktop.jpg">
            </div>
        </div>
        <div class="col-lg-6 offset-lg-1 d-flex justify-content-center align-items-center">
            <div class="position-relative">
                <h4 class="counter">No. 01</h4>
                <h2 class="section-title">Kami adalah salah satu Distributor Makanan Terbesar <span>di Bali...</span></h2>
            </div>
        </div>
    </div>
    <div class="content content-2 container row mx-auto">
        <div class="order-lg-1 order-2 col-lg-6">
            <div>
                <h4 class="counter">No. 02</h4>
                <h2 class="section-title">Visi</h2>
                <div class="content-2__body my-4">
                    <div class="media">
                        <img class="align-self-start mr-3" src="/img/icon/checkmark.svg">
                        <div class="media-body">
                            <p>Menjadi distributor pilihan pertama bagi principal, outlet dan konsumen.</p>
                        </div>
                    </div>
                </div>
                <h2 class="section-title">Misi</h2>
                <div class="content-2__body mt-4">
                    <div class="media">
                        <img class="align-self-start mr-3" src="/img/icon/checkmark.svg">
                        <div class="media-body">
                            <p>Menjadi yang pertama dalam distribusi produk.</p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-start mr-3" src="/img/icon/checkmark.svg">
                        <div class="media-body">
                            <p>Menjadi rekan terpercaya dari principal dan outlet.</p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-start mr-3" src="/img/icon/checkmark.svg">
                        <div class="media-body">
                            <p>Mengembangkan karyawan berkompeten tinggi dengan lingkungan kerja yang baik.</p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-start mr-3" src="/img/icon/checkmark.svg">
                        <div class="media-body">
                            <p>Menghilangkan hal-hal yang tidak memberikan nilai tambah dalam operasional.</p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-start mr-3" src="/img/icon/checkmark.svg">
                        <div class="media-body">
                            <p>Mendapatkan kehormatan karena peduli dengan masyarakat dan lingkungan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="order-lg-2 order-1 col-lg-5 offset-lg-1 d-flex justify-content-center align-items-center">
            <img src="/img/illustration/target.svg">
        </div>
    </div>
    <div class="content content-3 container">
        <h4 class="counter mt-0 text-center">No. 03</h4>
        <h2 class="section-title">Sejarah Perusahaan</h2>
        <div class="row mx-auto">
            <div class="col-12 history p-0">
                <p>Usaha ini pertama kali dimulai ketika An Selamat membawa 1 mobil box Indomie dari Surabaya ke Bali pada tahun 1980. Dengan keuletan dan kegigihannya memperkenalkan Indomie di pasar Bali, Indomie menjadi dikenal dan diterima oleh masyarakat Bali. Tahun 2001 PT. Kembar Putra Makmur dibentuk untuk menjadi wadah dari usaha distribusi ini. Sejak saat itu, beberapa principal bergabung untuk menikmati jaringan distribusi yang sudah dikembangkan selama puluhan tahun. Sekarang, PT. Kembar Putra Makmur mendistribusikan lebih dari 100 jenis produk ke seluruh Pulau Bali.</p>
            </div>
        </div>
    </div>
</div>
@endsection
