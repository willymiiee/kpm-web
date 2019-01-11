@extends('frontend.layouts.master')

@section('title')
Hubungi Kami
@endsection

@section('body')
<div class="contact">
    <header class="page-header">
        <div class="container">
            <h1 class="page-header__title">Hubungi Kami</h1>
        </div>
    </header>
    <div class="container">
        <p class="py-5">Anda dapat mengetahui lebih lanjut serta lebih terperinci mengenai deskripsi, ketersediaan maupun
            harga produk
            dengan mengubungi kontak yang ada dibawah ini.</p>
        <div class="main-contact" id="contact-accordion">
            <!-- DEPO NEGARA -->
            <div class="card">
                <div class="card-header" data-toggle="collapse" data-target="#contact-1" aria-expanded="true"
                    aria-controls="contact-1">
                    <h4 class="py-4 m-0 text-center">Depo Negara</h4>
                </div>
                <div id="contact-1" class="collapse show" data-parent="#contact-accordion">
                    <div class="card-body">
                        <p>Penanggung Jawab : Bapak Merta</p>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/phone-call.svg">
                            <div class="media-body">
                                <p class="m-0">(0365) 40079</p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/whatsapp-brands.svg">
                            <div class="media-body">
                                <p class="m-0">+62 877-6251-7120</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DEPO SINGARAJA -->
            <div class="card">
                <div class="card-header" data-toggle="collapse" data-target="#contact-2" aria-expanded="false"
                    aria-controls="contact-2">
                    <h4 class="py-4 text-center">
                        Depo Singaraja
                    </h4>
                </div>
                <div id="contact-2" class="collapse" data-parent="#contact-accordion">
                    <div class="card-body">
                        <p>Penanggung Jawab : Bapak Merta</p>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/phone-call.svg">
                            <div class="media-body">
                                <p class="m-0">(0362) 3301247</p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/whatsapp-brands.svg">
                            <div class="media-body">
                                <p class="m-0">+62 877-6251-7120</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SP. KUTA -->
            <div class="card">
                <div class="card-header" data-toggle="collapse" data-target="#contact-3" aria-expanded="false"
                    aria-controls="contact-3">
                    <h4 class="py-4 text-center">
                        Sp. Kuta
                    </h4>
                </div>
                <div id="contact-3" class="collapse" data-parent="#contact-accordion">
                    <div class="card-body">
                        <p>Penanggung Jawab : Bapak Merta</p>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/phone-call.svg">
                            <div class="media-body">
                                <p class="m-0">(0361) 705346</p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/whatsapp-brands.svg">
                            <div class="media-body">
                                <p class="m-0">+62 877-6251-7120</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DEPO BANGLI -->
            <div class="card">
                <div class="card-header" data-toggle="collapse" data-target="#contact-4" aria-expanded="false"
                    aria-controls="contact-4">
                    <h4 class="py-4 text-center">
                        Depo Bangli
                    </h4>
                </div>
                <div id="contact-4" class="collapse" data-parent="#contact-accordion">
                    <div class="card-body">
                        <p>Penanggung Jawab : Bapak Wayan Kertiyasa</p>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/phone-call.svg">
                            <div class="media-body">
                                <p class="m-0">(0366) 91225</p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/whatsapp-brands.svg">
                            <div class="media-body">
                                <p class="m-0">+62 812-3710-8096</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DEPO KLUNGKUNG -->
            <div class="card">
                <div class="card-header" data-toggle="collapse" data-target="#contact-5" aria-expanded="false"
                    aria-controls="contact-5">
                    <h4 class="py-4 text-center">
                        Depo Klungkung
                    </h4>
                </div>
                <div id="contact-5" class="collapse" data-parent="#contact-accordion">
                    <div class="card-body">
                        <p>Penanggung Jawab : Bapak Wayan Kertiyasa</p>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/phone-call.svg">
                            <div class="media-body">
                                <p class="m-0">(0366) 22715</p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/whatsapp-brands.svg">
                            <div class="media-body">
                                <p class="m-0">+62 812-3710-8096</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DEPO KARANGASEM -->
            <div class="card">
                <div class="card-header" data-toggle="collapse" data-target="#contact-6" aria-expanded="false"
                    aria-controls="contact-6">
                    <h4 class="py-4 text-center">
                        Depo Karang Asem
                    </h4>
                </div>
                <div id="contact-6" class="collapse" data-parent="#contact-accordion">
                    <div class="card-body">
                        <p>Penanggung Jawab : Bapak Wayan Kertiyasa</p>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/phone-call.svg">
                            <div class="media-body">
                                <p class="m-0">+62 812-3665-7954</p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/whatsapp-brands.svg">
                            <div class="media-body">
                                <p class="m-0">+62 812-3710-8096</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- HCO / DENPASAR -->
            <div class="card">
                <div class="card-header" data-toggle="collapse" data-target="#contact-7" aria-expanded="false"
                    aria-controls="contact-7">
                    <h4 class="py-4 text-center">Depo Denpasar / HCO (Toko Modern)</h4>
                </div>
                <div id="contact-7" class="collapse" data-parent="#contact-accordion">
                    <div class="card-body">
                        <p>Penanggung Jawab : Putu Arianta (Depo Denpasar), Dewa Maharsika (HCO / Toko Modern)</p>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/phone-call.svg">
                            <div class="media-body">
                                <p class="m-0">(0361) 9006483</p>
                            </div>
                        </div>
                        <div class="media">
                            <img class="align-self-center mr-3" src="/img/icon/whatsapp-brands.svg">
                            <div class="media-body">
                                <p class="m-0">+62 819-9985-3051 (Putu Arianta)</p>
                                <p class="m-0">+62 819-9964-0111 (Dewa Maharsika)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
