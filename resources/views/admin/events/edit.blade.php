@extends('layouts.admin')

@section('content-header')
    Обновить акцию
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.event.index') }}">Акции</a>
    </li>
    <li class="breadcrumb-item active">Обновить акцию</li>
@endsection

@section('content')
    @foreach ($errors->all() as $message)
    <div>{{$message}}</div>
    @endforeach
    <form action="{{route('dashboard.event.update',$event->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="row">
                <div class="form-group col-4">
                    <label for="title_uz">Описание UZ</label>
                    <input type="text" class="form-control @error('title_uz') is-invalid @enderror"
                           id="title_uz" name="title_uz"
                    value="{{old('title_uz') ?? $event->title_uz}}">
                    @error('title_uz')
                    <span id="title_uz-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="title_ru">Описание RU</label>
                    <input type="text" class="form-control @error('title_ru') is-invalid @enderror"
                           id="title_ru" name="title_ru"
                    value="{{old('title_ru') ?? $event->title_ru}}">
                    @error('title_ru')
                    <span id="title_ru-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="title_en">Описание EN</label>
                    <input type="text" class="form-control @error('title_en') is-invalid @enderror"
                           id="title_en" name="title_en"
                    value="{{old('title_en') ?? $event->title_en}}">
                    @error('title_en')
                    <span id="name_en-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="description_uz">Описание UZ</label>
                    <textarea class="form-control @error('description_uz') is-invalid @enderror"
                              name="description_uz" rows="3" id="description_uz">
                        value="{{old('description_uz') ?? $event->description_uz}}"
                    </textarea>
                    @error('description_uz')
                    <span id="description_uz-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="description_ru">Описание RU</label>
                    <textarea class="form-control @error('description_ru') is-invalid @enderror"
                              name="description_ru" rows="3" id="description_ru">
                        value="{{old('description_ru') ?? $event->description_ru}}"
                    </textarea>
                    @error('description_ru')
                    <span id="description_ru-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="description_en">Описание EN</label>
                    <textarea class="form-control @error('description_en') is-invalid @enderror"
                              name="description_en" rows="3" id="description_en">
                        value="{{old('description_en') ?? $event->description_en}}"
                    </textarea>
                    @error('description_en')
                    <span id="description_en-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <img class="img-fluid rounded" src="{{asset('/storage/' . $event->image_path)}}" alt="" style="height: 200px; width: 200px">
                </div>
                <div class="form-group col-4">
                    <label for="image">Обновить изображения</label>
                    <input type="file"
                           class="form-control @error('image') is-invalid @enderror"
                           name="image"
                           id="image"
                           value="{{old('image') ?? $event->image}}">
                    @error('image')
                    <span id="image_path-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary btn-sm col-2 float-right">Обновить</button>
        </div>
    </form>
@endsection

