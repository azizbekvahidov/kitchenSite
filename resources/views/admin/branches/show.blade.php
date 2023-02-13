@extends('layouts.admin')

@section('content-header')
    Просмотр
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.branch.index') }}">Филиалы</a>
    </li>
    <li class="breadcrumb-item active">{{$branch->name_uz}}</li>
@endsection

@section('content')
    <form>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-4">
                    <label for="name_uz">Имя UZ</label>
                    <input type="text" disabled class="form-control" id="name_uz" value="{{$branch->name_uz}}">
                </div>
                <div class="form-group col-4">
                    <label for="name_ru">Имя RU</label>
                    <input type="text" disabled class="form-control" id="name_ru" value="{{$branch->name_ru}}">
                </div>
                <div class="form-group col-4">
                    <label for="name_en">Имя EN</label>
                    <input type="text" disabled class="form-control" id="name_en" value="{{$branch->name_en}}">
                </div>
                <div class="form-group col-4">
                    <label for="address_uz">Адрес UZ</label>
                    <input type="text" disabled class="form-control" id="address_uz" value="{{$branch->address_uz}}">
                </div>
                <div class="form-group col-4">
                    <label for="address_ru">Адрес RU</label>
                    <input type="text" disabled class="form-control" id="address_ru" value="{{$branch->address_ru}}">
                </div>
                <div class="form-group col-4">
                    <label for="address_en">Адрес EN</label>
                    <input type="text" disabled class="form-control" id="address_en" value="{{$branch->address_en}}">
                </div>
                <div class="form-group col-6">
                    <label for="phone">Телефон</label>
                    <input type="text" disabled class="form-control" id="phone" value="{{$branch->phone}}">
                </div>
            </div>
            <div class="form-group col-2 pl-0">
                <a href="{{route('dashboard.branch.index')}}"
                   class="btn btn-block btn-primary btn-lg">Назад</a>
            </div>
        </div>

    </form>
@endsection
