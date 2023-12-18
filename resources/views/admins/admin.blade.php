<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('resources/css/bootstrap.css') }}">
    <script src="{{ asset('resources/js/bootstrap.js') }}"></script>
    <script src="{{ asset('resources/js/bootstrap.bundle.js') }}"></script>
    <title>@yield('title', 'Панель администратора')</title>
</head>
<body>
@include('components.header')
<div class="container d-flex justify-content-center gap-5">
    <a href="{{route('product')}}" class="btn btn-outline-dark btn-lg" type="submit">Товары</a>
    <a href="{{route('category')}}" class="btn btn-outline-dark btn-lg" type="submit">Категории товаров</a>
    <a class="btn btn-outline-dark btn-lg" type="submit">Заказы</a>
</div>
@yield('content')
</body>
</html>
