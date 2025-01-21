@extends('layouts.app')

@section('title', 'product')

@section('css_page')
@endsection

@section('content')

    <div>
        <meta name="csrf-token-cart" content="{{ csrf_token() }}">
        <!-- The whole future lies in uncertainty: live immediately. - Seneca -->

        <section class="product-details-area mtb-40px" style="margin-top:150px;padding-bottom: 90px">
            <div class="container">
                <div class="alert-success-add-to-cart alert alert-primary alert-dismissible fade" role="alert">
                    Berhasil menambahkan ke keranjang
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">

                        <div class="product-details-img product-details-tab">
                            <div class="zoompro-wrap zoompro-2">
                                <div class="zoompro-border zoompro-span">
                                    <img class="zoompro" src="{{ $product->image_url }}"
                                        data-zoom-image="{{ $product->image_url }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="product-details-content">
                            <h2>{{ $product->name }}</h2>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <p style="margin-left:-15px">(5)</p>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut">Rp {{ number_format($product->price, 0, '.', '.') }}</li>
                                </ul>
                            </div>
                            {!! $product->description !!}
                            <br> <!-- Added product description -->
                            <div class="pro-details-quality mt-0px">
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <span href="#" class="addToCart"> + Add To Cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <script>
        const elementCart = document.querySelector('.addToCart');
        if (elementCart) {
            elementCart.addEventListener('click', function(el) {
                handleAddToCart()
            })
        }

        const handleAddToCart = async () => {
            const csrfToken = document.querySelector('meta[name="csrf-token-cart"]').getAttribute('content');
            const inputQty = document.querySelector('.cart-plus-minus-box');
            const response = await fetch('/cart', {
                method: 'post',
                body: JSON.stringify({
                    product: {{ $product->id }},
                    quantity: inputQty.value,
                }),
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
            });

            const data = await response.json()
            if (response.status == 200) {
                getCountCart(csrfToken)
                $('.alert-success-add-to-cart').addClass('show')
                $('.count-items').addClass('shake')
                $('.count-items').on('animationend', function() {
                    $('count-items').removeClass('shake');
                })

            }

        }
    </script>

@endsection
