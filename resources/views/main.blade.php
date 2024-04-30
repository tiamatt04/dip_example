@extends('welcome')
@section('title', 'О нас')
@section('content')
    <div class="hero_cont d-flex justify-content-between container" style="padding-top: 100px;background: black;margin-top: 150px;border-radius: 8px;box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);">
        <div class="hero__right mt-4" style="padding-left: 15px;">
            <h2 class="text-white fs-2 mt-4" style="">МЫ ВСЕГДА</h2>
            <h1 class="text-danger fs-1 mt-1">ТЕБЕ РАДЫ</h1>
            <p class="text-white fs-4 w-90 mt-3">Главный акцент – свежая рыба и морепродукты, которые поставляются в ресторан
                прямиком из Японии</p>
            <button type="button" class="btn btn-outline-danger text-white" data-bs-toggle="modal" data-bs-target="#confirmOderModal">
                Забронируй столик прямо сейчас!
            </button>
        </div>
        <div class="div container">
            <img src="{{asset('/public/storage/hero_logo.png')}}" alt="sushi" style="margin-left: 48px;height: 560px;margin-top: -100px;">
        </div>
    </div>
    <div class="modal fade" id="confirmOderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Подтверждение заказа</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('order.create') }}" class="text-center">
                        @csrf
                        <div class="mb-3">
                            <h3 class="form-label text-primary">Выберите способ оплаты</h3>
                            <select  aria-label="Default select example" type="text" class="form-control" id="type_payment" name="type_payment">
                                <option>Оплата наличными</option>
                                <option>Оплата банковской картой</option>
                                <option>Оплата по QR-коду</option>
                            </select>
                            <div class="mb-3">
                                <h3 class="form-label text-primary">Введите адресс доставки</h3>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                        </div>
                        <div class="modal_footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                            <button type="submit" class="btn btn-info">Сформировать заказ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
