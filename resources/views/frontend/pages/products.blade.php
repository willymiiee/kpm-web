@extends('frontend.layouts.master')

@section('title')
Produk
@endsection

@section('body')
<div id="product">
    <header class="page-header">
        <div class="container">
            <h1 class="page-header__title">Produk Kami</h1>
        </div>
    </header>
    <div class="product container">
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/indofood.svg" alt="Indofood">
            </div>
            <div class="product__item--image">
                <img src="/img/products/indomie.png" alt="Indomie">
            </div>
            <p class="product__item--name text-center">Indomie</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/sukanda-djaya.jpg" alt="Sukanda Djaya">
            </div>
            <div class="product__item--image">
                <img src="/img/products/snickers.png" alt="Snickers">
            </div>
            <p class="product__item--name text-center">Snickers</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/indofood.svg" alt="Indofood">
            </div>
            <div class="product__item--image">
                <img src="/img/products/popmie.png" alt="Pop Mie">
            </div>
            <p class="product__item--name text-center">Pop Mie</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/sukanda-djaya.jpg" alt="Sukanda Djaya">
            </div>
            <div class="product__item--image">
                <img src="/img/products/doublemint.png" alt="Doublemint">
            </div>
            <p class="product__item--name text-center">Doublemint</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/sps-food.jpg" alt="SPS Food">
            </div>
            <div class="product__item--image">
                <img src="/img/products/bihun-jagung-padamu.jpg" alt="Bihun Jagung Padamu">
            </div>
            <p class="product__item--name text-center">Bihun Jagung Padamu</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/indofood.svg" alt="Indofood">
            </div>
            <div class="product__item--image">
                <img src="/img/products/pepsi.png" alt="Pepsi">
            </div>
            <p class="product__item--name text-center">Pepsi</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/indofood.svg" alt="Indofood">
            </div>
            <div class="product__item--image">
                <img src="/img/products/mie3ayam.png" alt="Mie Telur 3 Ayam">
            </div>
            <p class="product__item--name text-center">Mie Telur 3 Ayam</p>
        </div>
        <div class="product__item">
            {{-- <div class="product__item--supplier">
                <img src="/img/supplier/indofood.svg" alt="Indofood">
            </div> --}}
            <div class="product__item--image">
                <img src="/img/products/dairy-champ.png" alt="Dairy Champ">
            </div>
            <p class="product__item--name text-center">Susu Dairy Champ</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/sukanda-djaya.jpg" alt="Sukanda Djaya">
            </div>
            <div class="product__item--image">
                <img src="/img/products/sugus.png" alt="Sugus">
            </div>
            <p class="product__item--name text-center">Sugus</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/indofood.svg" alt="Indofood">
            </div>
            <div class="product__item--image">
                <img src="/img/products/fruitamin.jpg" alt="Fruitamin">
            </div>
            <p class="product__item--name text-center">Fruitamin</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/indofood.svg" alt="Indofood">
            </div>
            <div class="product__item--image">
                <img src="/img/products/ichi-ocha.jpg" alt="Ichi Ocha">
            </div>
            <p class="product__item--name text-center">Ichi Ocha</p>
        </div>
        <div class="product__item">
            <div class="product__item--supplier">
                <img src="/img/supplier/indofood.svg" alt="Indofood">
            </div>
            <div class="product__item--image">
                <img src="/img/products/cafela.png" alt="Cafela">
            </div>
            <p class="product__item--name text-center">Cafela</p>
        </div>
    </div>
</div>

</div>
@endsection
