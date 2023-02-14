@extends('layouts.admin')

@section('content-header')
    Создать филиал
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">
        <a href="{{ route('dashboard.menu_category.index') }}">Меню категории</a>
    </li>
    <li class="breadcrumb-item active">Создать</li>
@endsection

@section('content')

    <form action="{{route('dashboard.menu_category.store')}}" method="post">
        @csrf
        <div class="card-body ">
            <div class="form-group row">
                <div class="col-6">
                    <label for="name_uz">Имя UZ</label>
                    <input type="text" class="form-control @error('name_uz') is-invalid @enderror"
                           id="name_uz" name="name_uz">
                    @error('name_uz')
                    <span id="name_uz-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="name_ru">Имя Ru</label>
                    <input type="text" class="form-control @error('name_ru') is-invalid @enderror"
                           id="name_ru" name="name_ru">
                    @error('name_ru')
                    <span id="name_ru-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="col-6">
                    <label for="name_en">Имя EN</label>
                    <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                           id="name_en" name="name_en">
                    @error('name_en')
                    <span id="name_en-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-6">
                    <label for="branch_id">Выберите филиал</label>
                    <select name="branch_id" class="form-control">
                        @foreach($branches as $branch)
                            <option value="{{$branch->id}}"
                                {{$branch->id == old('branch_id') ? 'selected' : ""}}
                            >{{$branch->name_ru}}</option>
                        @endforeach
                    </select>
                    @error('branch_id')
                    <span id="branch_id-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn btn-block btn-primary btn-sm col-2 float-right">Добавить</button>
        </div>
    </form>

@endsection
