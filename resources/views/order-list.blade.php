@extends('layouts.app')

@section('title', 'product')

@section('css_page')
@endsection

@section('content')

    <div class="container" style="margin-top: 150px">
        <h3 class="mb-4 px-4">Daftar Transaksi</h3>
        <div class="row px-4">
            <div class="col-12">
                @foreach ($orders as $order)
                    <div class="history-card">
                        <p>Order {{ date('d M Y', strtotime($order['created_at'])) }} </p>
                        <p class="order-status-badge">{{ $order['status'] }}</p>
                        @foreach ($order['items'] as $product)
                            <div class="row mb-5">
                                <div class="col-md-3">
                                    <div class="history-card-info-wrapper">
                                        <div class="history-product-img">
                                            <img src="{{ $product['image_url'] }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9 pl-5">
                                    <p class="order-product-name">{{ $product['product_name'] }}</p>
                                    <p>{{ $product['quantity'] }} Barang x Rp
                                        {{ number_format($product['price'], 0, '.', '.') }}</p>
                                </div>

                            </div>
                        @endforeach
                        <div class="detail-order-wrapper">
                            <a href="/invoice/{{ $order['order_id'] }}" class="invoice-order-btn">Lihat Invoice</a>
                            <p class="total-price-order">Total Belanja Rp
                                {{ number_format($order['total_price'], 0, '.', '.') }}</p>
                        </div>


                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
