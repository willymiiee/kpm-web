@extends('frontend.layouts.master')

@section('title')
About Us
@endsection

@section('body')
<div class="about">
    <header class="page-header">
        <div class="container">
            <h1 class="page-header__title">About Us</h1>
        </div>
    </header>
    <div class="content content-1 container row mx-auto">

        <div class="col-lg-5 d-flex justify-content-center align-items-center">
            <div class="bg-shadow">
                <img src="/img/background/contact_desktop.jpg">
            </div>
        </div>
        <div class="col-lg-6 offset-lg-1">
            <div class="position-relative">
                <h4 class="content__counter">No. 01</h4>
                <h2 class="content__title">We are one of the biggest food distributor in <span>Bali...</span></h2>
                <p class="content__body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
                    exercitationem delectus similique quam fuga praesentium minus, nemo veniam totam beatae et dolor
                    sapiente alias. Iste corporis officiis ipsum aliquid odio!</p>
            </div>
        </div>
    </div>
    <div class="content content-2 container row mx-auto">
        <div class="order-lg-1 order-2 col-lg-6">
            <div>
                <h4 class="content__counter">No. 01</h4>
                <h2 class="content__title">Vision & Mission</h2>
                <div class="content__body">
                    <div class="media">
                        <img class="align-self-start mr-3" src="/img/icon/checkmark.svg">
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, et.</p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-start mr-3" src="/img/icon/checkmark.svg">
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, et.</p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="align-self-start mr-3" src="/img/icon/checkmark.svg">
                        <div class="media-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, et.</p>
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
        <h4 class="content__counter text-center">No. 03</h4>
        <h2 class="content__title">Our History</h2>
        <div class="row mx-auto">
            <div class="col-12 history p-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quo fugit veniam velit unde ducimus
                    tempora ab vero officiis adipisci, molestias sint. Soluta adipisci consectetur vero! Vel quisquam
                    aliquid deleniti enim dolorum ex illum beatae quis molestias exercitationem est adipisci tenetur a
                    debitis, quas praesentium repudiandae vero officia repellat at! Facere cumque accusamus soluta.
                    Nulla odio facere at nostrum consequuntur! Labore suscipit ut optio, quibusdam nihil libero veniam
                    corporis sapiente similique sit rerum quam hic! Eligendi error explicabo fugiat repellendus nulla
                    facere quasi cumque fuga aut nobis, perferendis quidem nam laborum cupiditate? Nam sapiente eum
                    nobis autem odio dignissimos aut.</p>
            </div>
        </div>
    </div>
</div>
@endsection
