@extends('layouts.admin')

@section('content-header')
    Меню категории
@endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item active">Меню категории</li>
@endsection
@section('content')

    <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap text-center">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th class="text-left">
                        <a href="{{route('dashboard.menu_category.create')}}">
                            <i class="fa fa-sharp fa-solid fa-plus" style="color: #0c84ff "></i>
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($menuCategories as $menu_category)
                    <tr>
                        <td>{{$menu_category->id}}</td>
                        <td>{{$menu_category->name_uz}}</td>
                        <td class="m-0">
                            <div class="w-75 d-flex justify-content-around">
                                <div class="col-2 p-0">
                                    <a class="btn" href="{{route('dashboard.menu_category.show',$menu_category->id)}}">
                                        <i class="fa fa-sharp fa-solid fa-eye" style="color: #0c84ff"></i>
                                    </a>
                                </div>
                                <div class="col-2 p-0">
                                    <a class="btn" href="{{route('dashboard.menu_category.edit',$menu_category->id)}}">
                                        <i class="fa fa-sharp fa-solid fa-pen" style="color: #00b44e"></i>
                                    </a>
                                </div>
                                <div class="col-2 p-0">
                                    <form action="{{route('dashboard.menu_category.delete',$menu_category->id)}}"
                                          method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn" type="submit"><i class="fa fa-sharp fa-solid fa-trash"
                                                                             style="color: red"></i></button>
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
@endsection
