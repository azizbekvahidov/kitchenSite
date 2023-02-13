@extends('layouts.admin')

@section('content-header')
    Создать филиал
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">
        <a href="{{ route('dashboard.branch.index') }}">Филиалы</a>
    </li>
    <li class="breadcrumb-item active">Создать</li>
@endsection

@section('content')

    <form action="{{route('dashboard.branch.store')}}" method="post">
        @csrf
        <div class="card-body ">
            <div class="form-group row">
                <div class="col-4">
                    <label for="name_uz">Имя UZ</label>
                    <input type="text" class="form-control @error('name_uz') is-invalid @enderror"
                           id="name_uz" name="name_uz">
                    @error('name_uz')
                    <span id="name_uz-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
               <div class="col-4">
                   <label for="name_ru">Имя Ru</label>
                   <input type="text" class="form-control @error('name_ru') is-invalid @enderror"
                          id="name_ru" name="name_ru">
                   @error('name_ru')
                   <span id="name_ru-error" class="error invalid-feedback">{{$message}}</span>
                   @enderror
               </div>
                <div class="col-4">
                    <label for="name_en">Имя EN</label>
                    <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                           id="name_en" name="name_en">
                    @error('name_en')
                    <span id="name_en-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="address_uz">Адрес UZ</label>
                    <input type="text" class="form-control @error('address_uz') is-invalid @enderror"
                           id="address_uz" name="address_uz">
                    @error('address_uz')
                    <span id="address_uz-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="address_ru">Адрес RU</label>
                    <input type="text" class="form-control @error('address_ru') is-invalid @enderror"
                           id="address_ru" name="address_ru">
                    @error('address_ru')
                    <span id="address_ru-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-4">
                    <label for="address_en">Адрес EN</label>
                    <input type="text" class="form-control @error('address_en') is-invalid @enderror"
                           id="address_en" name="address_en">
                    @error('address_en')
                    <span id="address_en-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="phone">Телефон</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                           id="phone" name="phone">
                    @error('phone')
                    <span id="phone-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary btn-sm col-2 float-right">Добавить</button>
        </div>
    </form>

@endsection
