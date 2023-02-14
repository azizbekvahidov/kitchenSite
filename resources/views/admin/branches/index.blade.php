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
                            <th class="text-left">
                                <a href="{{route('dashboard.branch.create')}}">
                                    <i class="fa fa-sharp fa-solid fa-plus" style="color: #0c84ff "></i>
                                </a>
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
                                    <div class="w-75 d-flex justify-content-around">
                                        <div class="col-2 p-0">
                                            <a class="btn" href="{{route('dashboard.branch.show',$branch->id)}}">
                                                <i class="fa fa-sharp fa-solid fa-eye" style="color: #0c84ff"></i>
                                            </a>
                                        </div>
                                        <div class="col-2 p-0">
                                            <a class="btn" href="{{route('dashboard.branch.edit',$branch->id)}}">
                                                <i class="fa fa-sharp fa-solid fa-pen" style="color: #00b44e"></i>
                                            </a>
                                        </div>
                                        <div class="col-2 p-0">

                                            <form action="{{route('dashboard.branch.delete',$branch->id)}}"
                                                  method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn" type="submit"><i
                                                        class="fa fa-sharp fa-solid fa-trash" style="color: red"></i>
                                                </button>
                                            </form>

                                        </div>
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
