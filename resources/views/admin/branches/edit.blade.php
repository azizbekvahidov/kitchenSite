@extends('layouts.admin')

@section('content-header')
    Обновить филиал
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.branch.index') }}">Филиалы</a>
    </li>
    <li class="breadcrumb-item active">Редактирование</li>
    <li class="breadcrumb-item active"> {{ $branch->name }} </li>
@endsection

@section('content')

    <form action="{{route('dashboard.branch.update',$branch->id)}}" method="post">
        @csrf
        @method('Patch')
        <div class="card-body ">
            <div class="form-group row">
               <div class="col-6">
                   <label for="name_ru">Имя</label>
                   <input type="text" class="form-control @error('name_ru') is-invalid @enderror"
                          id="name_ru" name="name_ru"
                          value="{{old('name_ru') ?? $branch->name_ru}}">
                   @error('name_ru')
                   <span id="name_ru-error" class="error invalid-feedback">{{$message}}</span>
                   @enderror
               </div>
                <div class="col-6">
                    <label for="address_ru">Адрес</label>
                    <input type="text" class="form-control @error('address_ru') is-invalid @enderror"
                           id="address_ru" name="address_ru"
                           value="{{old('address_ru') ?? $branch->address_ru}}">
                    @error('address_ru')
                    <span id="address_ru-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="phone">Телефон</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror"
                           id="phone" name="phone"
                           value="{{old('phone') ?? $branch->phone}}">
                    @error('phone')
                    <span id="phone-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary btn-sm col-2 float-right">Обновить</button>
        </div>
    </form>

@endsection
