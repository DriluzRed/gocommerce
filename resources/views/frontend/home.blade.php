@extends('frontend.layouts.app')

@section('content')
<style>
    .text-center {
        font-weight: bold;
        color: #3abd91;
    }

</style>

<!-- Offers Section -->
<div class="container-fluid mt-5">
    <x-slider />
</div>
<div class="container mt-5">
    <h2 class="text-center">Ofertas destacadas</h2>
    <div class="row">
        @if($offers->isNotEmpty())
        <div class="row">
            @foreach($offers as $offer)
                @include('components.product-offer-card', ['product' => $offer])
            @endforeach
        </div>

        @else
            <p class="text-center">No hay ofertas disponibles en este momento.</p>
        @endif
    </div>
    <h2 class="text-center">Nuevos Productos</h2>
    <div class="row">
        @if($products->isNotEmpty())
        <div class="row">
            @foreach($products as $product)
                @include('components.product-card', ['product' => $product])
            @endforeach
        </div>
        @else
            <p class="text-center">No hay productos disponibles en este momento.</p>
        @endif
    </div>
    <!-- Paginación -->
    <div class="d-flex justify-content-center">
        <a href="{{route('products.index')}}" class="btn btn-warning text-white">Ver todos los productos</a>
    </div>
</div>

@endsection
