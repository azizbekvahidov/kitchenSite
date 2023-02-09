@extends('layouts.admin')

@section('content-header')
    Просмотр
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Филиал/Просмотр</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap text-center">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$branch->id}}</td>
                                <td>{{$branch->name}}</td>
                                <td>{{$branch->address}}</td>
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
