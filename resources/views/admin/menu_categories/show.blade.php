@extends('layouts.admin')

@section('content-header')
    Просмотр
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.menu_category.index') }}">Меню категории</a>
    </li>
    <li class="breadcrumb-item active">{{$menu_category->name_uz}}</li>
@endsection

@section('content')
    <form>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-6">
                    <label for="name_uz">Имя UZ</label>
                    <input type="text" disabled class="form-control" id="name_uz" value="{{$menu_category->name_uz}}">
                </div>
                <div class="form-group col-6">
                    <label for="name_ru">Имя RU</label>
                    <input type="text" disabled class="form-control" id="name_ru" value="{{$menu_category->name_ru}}">
                </div>
                <div class="form-group col-6">
                    <label for="name_en">Имя EN</label>
                    <input type="text" disabled class="form-control" id="name_en" value="{{$menu_category->name_en}}">
                </div>
                <div class="form-group col-6">
                    <label for="branch_id">Филиал RU</label>
                    <input type="text" disabled class="form-control" id="branch_id" value="{{$menu_category->branch->name_ru}}">
                </div>
            </div>
            <div class="form-group col-2 pl-0">
                <a href="{{route('dashboard.menu_category.index')}}"
                   class="btn btn-block btn-primary">Назад</a>
            </div>
        </div>

    </form>
@endsection
