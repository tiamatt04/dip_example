<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid" data-bs-theme="dark">
        <a class="navbar-brand" href="{{ route('/') }}">CopyStar</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('/')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('catalog') }}">Каталог</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Товар</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">Где нас найти?</a>
                </li>
            </ul>
            <div class="d-flex gap-3">
                @auth()
                    @if(\Illuminate\Support\Facades\Auth::user()-> isAdmin)
                        <a href="{{route('admin')}}" class="btn btn-outline-dark">Панель админа</a>
                    @else
                        <a href="{{ route('basket') }}" class="btn btn-primary">Корзина</a>
                        <a href="{{ route('orders') }}" class="btn btn-primary">Заказы</a>
                    @endif
                        <a href="{{route('logout')}}" class="btn btn-danger">Выйти</a>
                @endauth
                @guest()
                    <a href="{{route('auth')}}" type="button" class="btn btn-primary">Вход</a>
                    <a href="{{route('register')}}" type="button" class="btn btn-secondary">Регистрация</a>
                @endguest
            </div>
        </div>
    </div>
</nav>
