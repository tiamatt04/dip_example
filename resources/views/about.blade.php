@extends('welcome')
@section('title', 'О нас')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        @if($products)
                            @foreach($products as $key=>$product)
                                <div class="carousel-item @if($key === 0) active @endif">
                                    <img src="{{ asset('storage/app/public/'. $product->product_photo) }}" class="d-block w-100" alt="Фото товара">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $product->product_name }}</h5>
                                        <p>{{$product->product_price}}</p>
                                    </div>

                                </div>
                            @endforeach
                        @endif
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
