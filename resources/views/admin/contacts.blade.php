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
                    <div class="form-group col-4">
                        <label for="site_name_uz">Название сайта_uz</label>
                        <input type="text"
                               class="form-control @error('site_name_uz') is-invalid @enderror"
                               name="site_name_uz"
                               id="site_name_uz"
                               value="{{ old('site_name_uz') ?? ($contacts ? $contacts->site_name_uz : "") }}" >
                        @error('site_name_uz')
                        <span id="site_name_uz-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="site_name_ru">Название сайта_ru</label>
                        <input type="text"
                               class="form-control @error('site_name_ru') is-invalid @enderror"
                               name="site_name_ru"
                               id="site_name_ru"
                               value="{{ old('site_name_ru') ?? ($contacts ? $contacts->site_name_ru : "") }}" >
                        @error('site_name_ru')
                        <span id="site_name_ru-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="site_name_en">Название сайта_en</label>
                        <input type="text"
                               class="form-control @error('site_name_en') is-invalid @enderror"
                               name="site_name_en"
                               id="site_name_en"
                               value="{{ old('site_name_en') ?? ($contacts ? $contacts->site_name_en : "") }}" >
                        @error('site_name_en')
                        <span id="site_name_en-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="address_uz"> Адрес_uz</label>
                        <input type="text"
                               class="form-control @error('address_uz') is-invalid @enderror"
                               name="address_uz"
                               id="address_uz"
                               value="{{ old('address_uz') ?? ($contacts ? $contacts->address_uz : "") }}" >
                        @error('address_uz')
                        <span id="address_uz-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="address_ru"> Адрес_ru</label>
                        <input type="text"
                               class="form-control @error('address_ru') is-invalid @enderror"
                               name="address_ru"
                               id="address_ru"
                               value="{{ old('address_ru') ?? ($contacts ? $contacts->address_ru : "") }}" >
                        @error('address_ru')
                        <span id="address_ru-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="address_en"> Адрес_en</label>
                        <input type="text"
                               class="form-control @error('address_en') is-invalid @enderror"
                               name="address_en"
                               id="address_en"
                               value="{{ old('address_en') ?? ($contacts ? $contacts->address_en : "") }}" >
                        @error('address_en')
                        <span id="address_en-error" class="error invalid-feedback">{{$message}}</span>
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
