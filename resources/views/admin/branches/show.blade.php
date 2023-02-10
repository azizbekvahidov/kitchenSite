@extends('layouts.admin')

@section('content-header')
    Просмотр
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.branch.index') }}">Филиалы</a>
    </li>
    <li class="breadcrumb-item active">{{$branch->name_uz}}</li>
    <li class="breadcrumb-item active">{{$branch->name_ru}}</li>
    <li class="breadcrumb-item active">{{$branch->name_en}}</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap text-center">
                        <thead>
                        <tr>
                            <th>Id_uz</th>
                            <th>Ism_uz</th>
                            <th>Manzil_uz</th>
                            <th>Telefon_uz</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$branch->id}}</td>
                                <td>{{$branch->name_uz}}</td>
                                <td>{{$branch->address_uz}}</td>
                                <td>{{$branch->phone}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap text-center">
                        <thead>
                        <tr>
                            <th>Айди_ru</th>
                            <th>Имя_ru</th>
                            <th>Адрес_ru</th>
                            <th>Телефон_ru</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$branch->id}}</td>
                            <td>{{$branch->name_ru}}</td>
                            <td>{{$branch->address_ru}}</td>
                            <td>{{$branch->phone}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap text-center">
                        <thead>
                        <tr>
                            <th>Id_en</th>
                            <th>Name_en</th>
                            <th>Address_en</th>
                            <th>Phone_en</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$branch->id}}</td>
                            <td>{{$branch->name_en}}</td>
                            <td>{{$branch->address_en}}</td>
                            <td>{{$branch->phone}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="w-25  float-right">
                <div class="">
                    <a href="{{route('dashboard.branch.index')}}"
                       class="btn btn-block btn-primary btn-sm">Назад</a>
                </div>
            </div>
        </div>
    </div>
@endsection
