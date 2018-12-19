@extends('frontend.layouts.master')

@section('title')
Homepage
@endsection

@section('body')
<div id="home">

    {{---------- Banner Section ----------}}

    <section class="first row mx-auto">
        <div class="banner col-12 col-md-7 offset-md-5 p-0 d-flex flex-column justify-content-center">
            <h1 class="banner__title m-0">PT. Kembar Putra Makmur</h1>
            <p class="banner__subtext">Products Distributor in Bali, Indonesia</p>
            <div>
                <a href="{{ url('/about') }}" class="button outline">Learn More</a>
            </div>
        </div>
        <img class="shape-1" src="/img/shape/shape-1.svg">
        <img class="shape-2" src="/img/shape/shape-2.svg">
    </section>

    {{---------- Supplier Section ----------}}

    <section class="second">
        <h2 class="text-center">Our Good Supplier <br> and Partner</h2>
        <div class="supplier container">
            <div class="card-deck">
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="/img/supplier/indofood.svg" alt="Indofood" width="150">
                </div>
                <div class="card mx-2 d-flex justify-content-center align-items-center">
                    <img src="/img/supplier/sps-food.jpg" alt="SPS Food" width="150">
                </div>
                <div class="card d-flex justify-content-center align-items-center">
                    <img src="/img/supplier/mars.svg" alt="Mars Inc." width="150">
                </div>
            </div>
        </div>
    </section>

    {{---------- Company Description Section ----------}}

    <section class="third container">
        <div class="content row mx-auto">
            <div class="order-md-1 order-2 col-md-7 d-md-flex justify-content-md-center align-items-md-center">
                <div class="w-75 position-relative">
                    <span class="bg-text position-absolute">N</span>
                    <h2 class="content__title">Extensive Network <br> in Bali</h2>
                    <p class="content__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ipsa
                        perspiciatis harum nemo
                        delectus ex cumque quasi reprehenderit laboriosam dicta, at ratione exercitationem esse
                        corporis totam commodi dolore sed laborum distinctio! Ea placeat, consequatur inventore
                        quam possimus voluptate dignissimos unde repellendus soluta temporibus vitae? Non nostrum
                        tenetur porro ea architecto.</p>
                </div>
            </div>
            <div class="order-md-2 order-1 col-md-5 d-flex justify-content-center align-items-center">
                <img src="/img/illustration/network.svg" alt="Vast Network" width="300">
            </div>
        </div>
        <div class="content row mx-auto">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
                <img src="/img/illustration/infrastructure.svg" alt="Vast Network" width="300">
            </div>
            <div class="col-md-7 d-flex justify-content-center align-items-center">
                <div class="w-75 position-relative">
                    <span class="bg-text position-absolute">I</span>
                    <h2 class="content__title">Adequate <span>Infrastructure</span></h2>
                    <p class="content__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ipsa
                        perspiciatis harum nemo
                        delectus ex cumque quasi reprehenderit laboriosam dicta, at ratione exercitationem esse
                        corporis totam commodi dolore sed laborum distinctio! Ea placeat, consequatur inventore
                        quam possimus voluptate dignissimos unde repellendus soluta temporibus vitae? Non nostrum
                        tenetur porro ea architecto.</p>
                    <a href="{{ url('/infrastructure') }}" class="button fill mt-4">Learn More</a>
                </div>
            </div>
        </div>
        <div class="content row mx-auto d-flex">
            <div class="order-md-1 order-2 col-md-7 d-md-flex justify-content-md-center align-items-md-center">
                <div class="w-75 position-relative">
                    <span class="bg-text position-absolute">S</span>
                    <h2 class="content__title">Professional and<br>Adequate <span>Sales</span></h2>
                    <p class="content__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ipsa
                        perspiciatis harum nemo
                        delectus ex cumque quasi reprehenderit laboriosam dicta, at ratione exercitationem esse
                        corporis totam commodi dolore sed laborum distinctio! Ea placeat, consequatur inventore
                        quam possimus voluptate dignissimos unde repellendus soluta temporibus vitae? Non nostrum
                        tenetur porro ea architecto.</p>
                </div>
            </div>
            <div class="order-md-2 order-1 col-md-5 d-flex justify-content-center align-items-center">
                <img src="/img/illustration/sales.svg" alt="Vast Network" width="300">
            </div>
        </div>
    </section>
    <section class="fourth">
        <div class="container row mx-auto position-relative">
            <div class="col-4 col-lg-2 my-5 pl-0">
                <div class="product--thumbnail col-12 d-flex justify-content-center align-items-center">
                    <img src="/img/products/indomie.png" alt="Indomie">
                </div>
                <div class="product--thumbnail col-12 d-flex justify-content-center align-items-center my-2">
                    <img src="/img/products/snickers.png" alt="Snickers">
                </div>
                <a href="{{ url('/product') }}">
                    <div class="product--thumbnail col-12 d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <p class="see-more__text">See More</p>
                            <img class="see-more" src="/img/icon/plus-circle.svg">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-8 col-lg-7 offset-lg-1 px-0">
                <div class="product--preview d-flex justify-content-center align-items-center mt-5">
                    <img src="/img/products/indomie.png" alt="Indomie">
                    <h3 class="product--preview__name">INDOMIE</h3>
                </div>
            </div>
            <div class="vertical-line"></div>
            <span>Check Out Our Products</span>
        </div>

    </section>
    <section class="fifth">
        <div class="contact container text-center d-flex flex-column align-items-center justify-content-center h-100">
            <svg class="contact__icon" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" class="feather feather-phone-call">
                <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            <h2 class="content-title contact__title">Available Contact</h2>
            <span class="contact__content">0361 9006481<br>0361 9006483</span>
        </div>
    </section>
</div>
@endsection
