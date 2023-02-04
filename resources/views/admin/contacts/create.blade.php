@extends('layouts.admin')

@section('content-header')
    Create contact
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Create contact</li>
@endsection

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Создать</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('contact.store')}}" method="post">
            @csrf
            <div class="card-body ">

                <div class="row">
                    <div class="form-group col-6">
                        <label for="site_name">Site name</label>
                        <input type="text"
                               class="form-control @error('site_name') is-invalid @enderror"
                               name="site_name"
                               id="site_name"
                               placeholder="Site name">
                        @error('site_name')
                        <span id="site_name-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="address"> Address</label>
                        <input type="text"
                               class="form-control @error('address') is-invalid @enderror"
                               name="address"
                               id="address"
                               placeholder="Address">
                        @error('address')
                        <span id="address-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="phone">Phone</label>
                        <input type="text"
                               class="form-control @error('phone') is-invalid @enderror"
                               name="phone"
                               id="phone"
                               placeholder="phone">
                        @error('phone')
                        <span id="phone-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="email"> Email</label>
                        <input type="text"
                               class="form-control @error('email') is-invalid @enderror"
                               name="email"
                               id="email"
                               placeholder="Email">
                        @error('email')
                        <span id="email-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="map_link">Map link</label>
                        <input type="text"
                               class="form-control @error('map_link') is-invalid @enderror"
                               name="map_link"
                               id="map_link"
                               placeholder="Map link">
                        @error('map_link')
                        <span id="map_link-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="facebook"> Facebook</label>
                        <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook">
                        @error('facebook')
                        <div>{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="instagram">Instagram</label>
                        <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram">
                        @error('instagram')
                        <div>{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="telegram"> Telegram</label>
                        <input type="text" class="form-control" name="telegram" id="telegram" placeholder="Telegram">
                        @error('telegram')
                        <div>{{$message}}</div>
                        @enderror
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Создать">
            </div>
        </form>
    </div>
@endsection
