@extends('welcome')
@section('title', 'Каталог')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form method="get" class="d-flex gap-4 mt-5">
                    <select class="form-select" name="sort_price" id="">
                        <option value="asc" {{ request('sort_price') == 'asc' ? 'selected' : '' }}>По возрастанию цены
                        </option>
                        <option value="desc" {{ request('sort_price') == 'desc' ? 'selected' : '' }}>По убыванию цены
                        </option>
                    </select>
                    <select class="form-select" name="category" id="">
                        <option value="">Все категории</option>
                        @foreach($categories as $category)
                            <option
                                value="{{$category->id}}" {{ request('$category') == $category->id ? 'selected' : '' }}>{{$category->category_name}}</option>
                        @endforeach
                    </select>

                    <button class="btn btn-outline-primary">Применить</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-center gap-4 mt-3">
                @foreach($products as $product)
                    <div class="card" style="width: 18rem;">
                        <a href="{{route('catalog_product', $product)}}">
                            <img src="{{ asset('storage/app/public/'. $product->product_photo) }}" height="200px"
                                 style="object-fit: cover; object-position: center" class="card-img-top"
                                 alt="Фото товара">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{$product->product_name}}</h5>
                            <p class="card-text">{{$product->product_description}}</p>
                            <div class="lower-card d-flex justify-content-between">
                                <div class="card-price">
                                    <p class="text-center text-primary">Цена</p>
                                    <p class="card-text ">{{$product->product_price}}</p>
                                </div>
                                <div class="card-country">
                                    <p class="text-center text-primary">Страна</p>
                                    <p class="card-text ">{{$product->product_country}}</p>
                                </div>
                            </div>
                            @auth()
                                <form action="{{ route('basket.add', $product) }}" method="post" class="text-center mt-3">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-info">В корзину</button>
                                </form>
                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
