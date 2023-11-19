@extends('layouts.main')

@section('content')
    <div class="container-main d-flex ">

        @forelse ($products as $product)
            <div class="card">


                <img class="img1" src="/assets/{{ $product['frontImage'] }}" alt="">
                <img class="img2" src="/assets/{{ $product['backImage'] }}" alt="1b">

                <span v-if="product.discount" class="discount">{{ $product['name'] }}</span>

                <span class="heart">&hearts;</span>

                <div class="descr">
                    <span class="marca">{{ $product['brand'] }}</span>
                    <h3>{{ $product['brand'] }}</h3>
                    <span class="red-price">&euro;{{ $product['price'] }}</span>
                    <span v-if="product.fullPrice" class="barred-price">&euro;{{ $product['price'] }}</span>
                </div>

            </div>

        @empty
            <h2>Non ci sono prodotti</h2>
        @endforelse








    </div>
@endsection
