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
               <div class="col-6">
                   <label for="name_ru">Имя</label>
                   <input type="text" class="form-control @error('name_ru') is-invalid @enderror"
                          id="name_ru" name="name_ru">
                   @error('name_ru')
                   <span id="name_ru-error" class="error invalid-feedback">{{$message}}</span>
                   @enderror
               </div>
                <div class="col-6">
                    <label for="address_ru">Адрес</label>
                    <input type="text" class="form-control @error('address_ru') is-invalid @enderror"
                           id="address_ru" name="address_ru">
                    @error('address_ru')
                    <span id="address_ru-error" class="error invalid-feedback">{{$message}}</span>
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
