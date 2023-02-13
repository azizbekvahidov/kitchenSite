@extends('layouts.admin')

@section('content-header')
    Филиалы
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Филиалы</li>
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
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>
                                    <a href="{{route('dashboard.branch.create')}}"
                                       class="btn btn-block btn-primary btn-sm w-75">Создать</a>
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($branches as $branch)
                            <tr>
                                <td>{{$branch->id}}</td>
                                <td>{{$branch->name_uz}}</td>
                                <td>{{$branch->phone}}</td>
                                <td class="m-0">
                                    <div class="w-75 d-flex justify-content-between">
                                        <div class="col-4 p-0">
                                            <a href="{{route('dashboard.branch.show',$branch->id)}}"
                                               class="btn btn-block btn-primary btn-sm">Просмотреть</a>
                                        </div>
                                        <div class="col-4 px-2">
                                           <a href="{{route('dashboard.branch.edit',$branch->id)}}"
                                              class="btn btn-block btn-success btn-sm">Обновить</a>
                                        </div>
                                        <form action="{{route('dashboard.branch.delete',$branch->id)}}" class="col-4 p-0" method="post">
                                            @csrf
                                            @method('delete')
                                            <input class="btn btn-block btn-danger btn-sm" type="submit"
                                                   value="Удалить">
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

@endsection
