@extends('layouts.admin')

@section('content-header')
    Обновить филиал
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Филиал/Обновить</li>
@endsection

@section('content')

    <form action="{{route('dashboard.branch.update',$branch->id)}}" method="post">
        @csrf
        @method('Patch')
        <div class="card-body ">
            <div class="form-group row">
               <div class="col-6">
                   <label for="name">Имя</label>
                   <input type="text" class="form-control @error('name') is-invalid @enderror"
                          id="name" name="name"
                          value="{{old('name') ?? $branch->name}}">
                   @error('name')
                   <span id="name-error" class="error invalid-feedback">{{$message}}</span>
                   @enderror
               </div>
                <div class="col-6">
                    <label for="address">Адрес</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror"
                           id="address" name="address"
                           value="{{old('address') ?? $branch->address}}">
                    @error('address')
                    <span id="address-error" class="error invalid-feedback">{{$message}}</span>
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
