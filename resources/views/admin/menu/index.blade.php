@extends('layouts.admin')

@section('content-header')
    Меню
@endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item active">Меню </li>
@endsection

@section('content')

    <table class="table table-hover text-nowrap text-center">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Цена</th>
            <th>Категории</th>
            <th class="text-left">
                <a href="{{route('dashboard.menu.create')}}">
                    <i class="fa fa-sharp fa-solid fa-plus" style="color: #0c84ff "></i>
                </a>
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($menus as $menu)
        <tr>
            <td>{{$menu->id}}</td>
            <td>{{$menu->name_uz}}</td>
            <td>{{$menu->price}}</td>
            <td>{{$menu->menuCategory->name_uz}}</td>
            <td class="m-0">
                <div class="w-75 d-flex justify-content-around">
                    <div class="col-2 p-0">
                        <a class="btn" href="{{route('dashboard.menu.show',$menu->id)}}">
                            <i class="fa fa-sharp fa-solid fa-eye" style="color: #0c84ff"></i>
                        </a>
                    </div>
                    <div class="col-2 p-0">
                        <a class="btn" href="{{route('dashboard.menu.edit',$menu->id)}}">
                            <i class="fa fa-sharp fa-solid fa-pen" style="color: #00b44e"></i>
                        </a>
                    </div>
                    <div class="col-2 p-0">

                        <form action="{{route('dashboard.menu.delete',$menu->id)}}"
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
@endsection
