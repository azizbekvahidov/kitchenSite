@extends('layouts.admin')

@section('content-header')
    Обновить контакты
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Обновить контакты</li>
@endsection

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Обновить</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('dashboard.contact.update')}}" method="post">
            @csrf
            <div class="card-body ">

                <div class="row">
                    <div class="form-group col-6">
                        <label for="site_name">Название сайта</label>
                        <input type="text"
                               class="form-control @error('site_name') is-invalid @enderror"
                               name="site_name"
                               id="site_name"
                               value="{{ old('site_name') ?? ($contacts ? $contacts->site_name : "") }}" >
                        @error('site_name')
                        <span id="site_name-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="address"> Адрес</label>
                        <input type="text"
                               class="form-control @error('address') is-invalid @enderror"
                               name="address"
                               id="address"
                               value="{{ old('address') ?? ($contacts ? $contacts->address : "") }}" >
                        @error('address')
                        <span id="address-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="phone">Телефон</label>
                        <input type="text"
                               class="form-control @error('phone') is-invalid @enderror"
                               name="phone"
                               id="phone"
                               value="{{ old('phone') ?? ($contacts ? $contacts->phone : "") }}" >
                        @error('phone')
                        <span id="phone-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="email"> Электронная почта</label>
                        <input type="text"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email"
                               id="email"
                               value="{{ old('email') ?? ($contacts ? $contacts->email : "") }}" >
                        @error('email')
                        <span id="email-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="map_link">Ссылка на карту</label>
                        <input type="text"
                               class="form-control @error('map_link') is-invalid @enderror"
                               name="map_link"
                               id="map_link"
                               value="{{ old('map_link') ?? ($contacts ? $contacts->map_link : "") }}" >
                        @error('map_link')
                        <span id="map_link-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="facebook"> Фейсбук</label>
                        <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" id="facebook"
                               value="{{ old('facebook') ?? ($contacts ? $contacts->facebook : "") }}" >
                        @error('facebook')
                        <span id="facebook-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="instagram">Инстаграм</label>
                        <input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" id="instagram"
                               value="{{ old('instagram') ?? ($contacts ? $contacts->instagram : "") }}" >
                        @error('instagram')
                        <span id="instagram-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="telegram"> Телеграм</label>
                        <input type="text" class="form-control @error('telegram') is-invalid @enderror" name="telegram" id="telegram"
                               value="{{ old('telegram') ?? ($contacts ? $contacts->telegram : "") }}" >
                        @error('telegram')
                        <span id="telegram-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Обновить">
            </div>
        </form>
    </div>
@endsection
