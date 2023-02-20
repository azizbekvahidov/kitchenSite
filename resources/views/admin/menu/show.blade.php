@extends('layouts.admin')

@section('content-header')
    Просмотр
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.menu.index') }}">Меню</a>
    </li>
    <li class="breadcrumb-item active">{{$menu->name_uz}}</li>
@endsection

@section('content')
    <form>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-4">
                    <label for="name_uz">Имя UZ</label>
                    <input type="text" disabled class="form-control" id="name_uz" value="{{$menu->name_uz}}">
                </div>
                <div class="form-group col-4">
                    <label for="name_ru">Имя RU</label>
                    <input type="text" disabled class="form-control" id="name_ru" value="{{$menu->name_ru}}">
                </div>
                <div class="form-group col-4">
                    <label for="name_en">Имя EN</label>
                    <input type="text" disabled class="form-control" id="name_en" value="{{$menu->name_en}}">
                </div>
                <div class="form-group col-4">
                    <label for="description_uz">Описание UZ</label>
                    <textarea class="form-control" rows="3" id="description_uz" disabled>{{$menu->description_uz}}</textarea>
                </div>
                <div class="form-group col-4">
                    <label for="description_ru">Описание RU</label>
                    <textarea class="form-control" rows="3" id="description_ru" disabled>{{$menu->description_ru}}</textarea>
                </div>
                <div class="form-group col-4">
                    <label for="description_en">Описание EN</label>
                    <textarea class="form-control" rows="3" id="description_en" disabled >{{$menu->description_en}}</textarea>
                </div>
                <div class="form-group col-6">
                    <label for="price">Цена</label>
                    <input type="text" disabled class="form-control" id="price" value="{{$menu->price}}">
                </div>
                <div class="form-group col-6">
                    <label for="menu_category_id">Категория UZ</label>
                    <input type="text" disabled class="form-control" id="menu_category_id" value="{{$menu->menuCategory->name_uz}}">
                </div>
            </div>
            <div class="form-group col-2 pl-0">
                <a href="{{route('dashboard.menu.index')}}"
                   class="btn btn-block btn-primary">Назад</a>
            </div>
        </div>

    </form>
@endsection
