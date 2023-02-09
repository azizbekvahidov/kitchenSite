@extends('layouts.admin')

@section('content-header')
    Создать филиал
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Филиал/Создать</li>
@endsection

@section('content')

    <form action="{{route('dashboard.branch.store')}}" method="post">
        @csrf
        <div class="card-body ">
            <div class="form-group row">
               <div class="col-6">
                   <label for="name">Имя</label>
                   <input type="text" class="form-control @error('name') is-invalid @enderror"
                          id="name" name="name">
                   @error('name')
                   <span id="name-error" class="error invalid-feedback">{{$message}}</span>
                   @enderror
               </div>
                <div class="col-6">
                    <label for="address">Адрес</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                           id="address" name="address">
                    @error('address')
                    <span id="address-error" class="error invalid-feedback">{{$message}}</span>
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
