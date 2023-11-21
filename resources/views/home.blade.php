@extends('layouts.main')


@section('content')
    <div class="container-main d-flex ">


        @forelse ($products as $product)
            <div class="card">
                @php

                    $disc_price = $product['price'] * (50 / 100);
                    $format_price_disc = number_format($disc_price, 2);
                @endphp

                <img class="img1" src="/assets/{{ $product['frontImage'] }}" alt="">
                <img class="img2" src="/assets/{{ $product['backImage'] }}" alt="1b">
                @foreach ($product['badges'] as $badge)
                    @if ($badge['type'] == 'discount')
                        <span v-if="product.discount" class="discount">{{ $badge['value'] }}</span>
                    @endif
                @endforeach


                <span class="heart">&hearts;</span>

                <div class="descr">
                    <span class="marca">{{ $product['brand'] }}</span>
                    <h3>{{ $product['name'] }}</h3>
                    <span class="red-price">&euro;{{ $format_price_disc }}</span>
                    <span class="barred-price">&euro;{{ $product['price'] }}</span>
                </div>

            </div>

        @empty
            <h2>Non ci sono prodotti</h2>
        @endforelse








    </div>
@endsection
