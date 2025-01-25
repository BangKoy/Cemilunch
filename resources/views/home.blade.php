@extends('layouts.app')

@section('title', 'Home')

@section('css_page')
@endsection

@section('content')
    <div class="slider-area" style="margin-top: 84px">
        <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
            <!-- Slider Single Item Start -->
            <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
                style="background-image: url(/assets/images/banner-image/1.jpg);">
            </div>
            <!-- Slider Single Item End -->
            <!-- Slider Single Item Start -->
            <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
                style="background-image: url(/assets/images/banner-image/2.jpg);">
            </div>
            <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img"
                style="background-image: url(/assets/images/banner-image/3.jpg);">
            </div>
            <!-- Slider Single Item End -->
        </div>
    </div>
    <section class="feature-area mt-100px mb-70px">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- Section Title -->
                    <div class="section-title underline-shape">
                        <h1>Menu Produk</h1>
                        <p>Temukan makanan favorit kamu disini!</p>
                    </div>
                    <!-- Section Title -->
                </div>
            </div>
            <!-- Feature Slider Start -->
            <div class="list-product-wrapper">
                <!-- Single Item -->
                @foreach ($products as $prod)
                    <div class="">
                        <article class="list-product">
                            <div class="img-block">
                                <a href="{{ '/product/' . $prod->id }}" class="thumbnail">
                                    <img class="first-img" src="{{ $prod->image_url }}" alt="" />
                                    <img class="second-img" src="{{ $prod->image_url }}" alt="" />
                                </a>
                            </div>
                            <div class="product-decs">
                                {{-- <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a> --}}
                                <h2><a href="{{ '/product/' . $prod->id }}" class="product-link">{{ $prod->name }}</a>
                                </h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">Rp {{ number_format($prod->price, 0, '.', '.') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            <!-- Feature Slider End -->
        </div>
    </section>
    <!-- Feature Area End -->
    <!-- Brand area start -->
    {{-- <div class="brand-area mb-100px">
        <div class="container">
            <div class="border-1px">
                <div class="brand-slider owl-carousel owl-nav-style owl-nav-style-2">
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/3.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/4.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/5.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/1.jpg" alt="" /></a>
                    </div>
                    <div class="brand-slider-item">
                        <a href="#"><img src="assets/images/brand-logo/2.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Brand area End -->
@endsection



@section('js_page')
@endsection
