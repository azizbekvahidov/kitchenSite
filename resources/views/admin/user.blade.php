@extends('layouts.admin')

@section('content-header')
    Обновить профиль
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Обновить профиль</li>
@endsection

@section('content')
            <div class="tab-pane active" id="settings">
                <form class="form-horizontal" action="#" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Логин</label>
                        <div class="col-4">
                            <input type="text" class="form-control" id="inputName" disabled
                            value="admin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Пароль</label>
                        <div class="col-4">
                            <input name="password" type="password"
                                   class="form-control @error('password') is-invalid @enderror" id="password">
                            @error('password')
                            <span id="password-error" class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-repeat" class="col-sm-2 col-form-label">Пароль ещё раз</label>
                        <div class="col-4">
                            <input id="password-repeat" class="form-control @error('password') is-invalid @enderror"
                                   name="password_confirmation" type="password">
                            @error('password')
                            <span id="password-error" class="error invalid-feedback">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                                <input type="submit" class="btn btn-primary" value="Обновить">
                        </div>
                    </div>
                </form>
            </div>
@endsection
