@extends('layouts.admin')

@section('content-header')
    Обновить меню категории
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.menu_category.index') }}">Меню категории</a>
    </li>
    <li class="breadcrumb-item active">Редактирование</li>
    <li class="breadcrumb-item active"> {{ $menu_category->name_uz }} </li>
@endsection

@section('content')

    <form action="{{route('dashboard.menu_category.update',$menu_category->id)}}" method="post">
        @csrf
        @method('Patch')
        <div class="card-body ">
            <div class="form-group row">
                <div class="col-6">
                    <label for="name_uz">Имя UZ</label>
                    <input type="text" class="form-control @error('name_uz') is-invalid @enderror"
                           id="name_uz" name="name_uz"
                           value="{{old('name_ru') ?? $menu_category->name_uz}}">
                    @error('name_uz')
                    <span id="name_uz-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="name_ru">Имя RU</label>
                    <input type="text" class="form-control @error('name_ru') is-invalid @enderror"
                           id="name_ru" name="name_ru"
                           value="{{old('name_ru') ?? $menu_category->name_ru}}">
                    @error('name_ru')
                    <span id="name_ru-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="name_en">Имя EN</label>
                    <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                           id="name_en" name="name_en"
                           value="{{old('name_en') ?? $menu_category->name_en}}">
                    @error('name_en')
                    <span id="name_en-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="branch_id">Филиал RU</label>
                    <select name="branch_id" class="form-control">
                        @foreach($branches as $branch)
                            <option value="{{$branch->id}}"
                                {{$branch->id == $menu_category->branch_id ? 'selected' : ""}}
                            >{{$branch->name_ru}}</option>
                        @endforeach
                    </select>
                    @error('branch_id')
                    <span id="branch_id-error" class="error invalid-feedback">{{$message}}</span>--}}
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn btn-block btn-primary btn-sm col-2 float-right">Обновить</button>
        </div>
    </form>

@endsection
