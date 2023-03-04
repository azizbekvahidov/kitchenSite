@extends('layouts.admin')

@section('content-header')
    Просмотр
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.event.index') }}">Акции</a>
    </li>
    <li class="breadcrumb-item active">{{$event->title_uz}}</li>
@endsection

@section('content')
    <form>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-4">
                    <label for="name_uz">Заголовок UZ</label>
                    <input type="text" disabled class="form-control" id="name_uz" value="{{$event->title_uz}}">
                </div>
                <div class="form-group col-4">
                    <label for="name_ru">Заголовок RU</label>
                    <input type="text" disabled class="form-control" id="name_ru" value="{{$event->title_ru}}">
                </div>
                <div class="form-group col-4">
                    <label for="name_en">Заголовок EN</label>
                    <input type="text" disabled class="form-control" id="name_en" value="{{$event->title_en}}">
                </div>
                <div class="form-group col-4">
                    <label for="description_uz">Описание UZ</label>
                    <textarea class="form-control" rows="3" id="description_uz" disabled>{{$event->description_uz}}</textarea>
                </div>
                <div class="form-group col-4">
                    <label for="description_ru">Описание RU</label>
                    <textarea class="form-control" rows="3" id="description_ru" disabled>{{$event->description_ru}}</textarea>
                </div>
                <div class="form-group col-4">
                    <label for="description_en">Описание EN</label>
                    <textarea class="form-control" rows="3" id="description_en" disabled >{{$event->description_en}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <img class="img-fluid rounded" src="{{asset('/storage/' . $event->image_path)}}" alt="" style="height: 200px; width: 200px">
                    <a href="{{route('dashboard.event.index')}}"
                       class="btn btn-block btn-primary mt-2 ">Назад</a>
                </div>
            </div>
        </div>
    </form>
@endsection
