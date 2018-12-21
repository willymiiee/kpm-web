@extends('frontend.layouts.master')

@section('title')
Our Supplier
@endsection

@section('body')
<div id="supplier">
    <header class="page-header">
        <div class="container">
            <h1 class="page-header__title">Supplier</h1>
        </div>
    </header>
    <div class="supplier container">
        <div class="supplier__desc">
            <div class="supplier__logo d-flex justify-content-center align-items-center">
                <img src="/img/supplier/indofood.svg" alt="Indofood">
            </div>
            <h2 class="supplier__title">PT. Indofood Sukses Makmur Tbk.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquid recusandae veritatis aut
                laudantium non ex quos esse sequi blanditiis iste dignissimos, laborum temporibus optio iusto, quisquam
                vitae voluptatibus! Dolor consequatur possimus enim aperiam recusandae! Temporibus unde libero nam cum.</p>
            <footer class="blockquote-footer">Since 1896</footer>
        </div>
    </div>
    <div class="supplier container">
            <div class="supplier__desc">
                <div class="supplier__logo d-flex justify-content-center align-items-center">
                    <img src="/img/supplier/sps-food.jpg" alt="SPS Food">
                </div>
                <h2 class="supplier__title">PT. Sinar Pangan Sejahtera</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquid recusandae veritatis aut
                    laudantium non ex quos esse sequi blanditiis iste dignissimos, laborum temporibus optio iusto, quisquam
                    vitae voluptatibus! Dolor consequatur possimus enim aperiam recusandae! Temporibus unde libero nam cum.</p>
                <footer class="blockquote-footer">Since 1896</footer>
            </div>
        </div>
        <div class="supplier container">
                <div class="supplier__desc">
                    <div class="supplier__logo d-flex justify-content-center align-items-center">
                        <img src="/img/supplier/mars.svg" alt="Mars Inc.">
                    </div>
                    <h2 class="supplier__title">PT. Indofood Sukses Makmur Tbk.</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquid recusandae veritatis aut
                        laudantium non ex quos esse sequi blanditiis iste dignissimos, laborum temporibus optio iusto, quisquam
                        vitae voluptatibus! Dolor consequatur possimus enim aperiam recusandae! Temporibus unde libero nam cum.</p>
                    <footer class="blockquote-footer">Since 1896</footer>
                </div>
            </div>

</div>
@endsection
