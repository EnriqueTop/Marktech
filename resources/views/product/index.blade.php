@extends('layouts.app')
@section('content')
<!--Carrusel-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
            aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <a href="{{ route('product.show', 1) }}">
            <img src="{!! asset('img/banner1.webp') !!}"  class="d-block w-100" >
            </a>
        </div>
        <div class="carousel-item">
            <a href="{{ route('product.show', 2) }}">
            <img src="{!! asset('img/banner2.webp') !!}" href="/card" class="d-block w-100">
        </a>
        </div>
        <div class="carousel-item">
            <a href="{{ route('product.show', 3) }}">
            <img src="{!! asset('img/banner4.png') !!}" href="/card" class="d-block w-100">
        </a>
        </div>
        <div class="carousel-item">
            <a href="{{ route('product.show', 4) }}">
            <img src="{!! asset('img/banner2.webp') !!}" href="/card" class="d-block w-100">
        </a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
</div>
<br>

    <div class="row">
        @foreach ($viewData['products'] as $product)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="{{ asset('/storage/' . $product->getImage()) }}" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                            class="btn bg-black text-white font-weight-bold">${{ $product->getPrice() }}
                        </a>
<p></p>
                        <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                            class="btn bg-black text-white">{{ $product->getName() }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
