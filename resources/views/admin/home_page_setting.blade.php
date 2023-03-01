@extends('layouts.admin')

@section('content-header')
    Обновить контакты
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item active">Обновить контакты</li>
@endsection

@section('content')
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Обновить</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('dashboard.home_page_setting.update')}}" method="post">
            @csrf
            <div class="card-body ">

                <div class="row">
                    <div class="form-group col-4">
                        <label for="title_uz">Заголовок UZ</label>
                        <input type="text"
                               class="form-control @error('title_uz') is-invalid @enderror"
                               name="title_uz"
                               id="title_uz"
                               value="{{ old('title_uz') ?? ($homePageSettings ? $homePageSettings->title_uz : "") }}">
                        @error('title_uz')
                        <span id="title_uz-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="title_ru">Заголовок RU</label>
                        <input type="text"
                               class="form-control @error('title_ru') is-invalid @enderror"
                               name="title_ru"
                               id="title_ru"
                               value="{{ old('title_ru') ?? ($homePageSettings ? $homePageSettings->title_ru : "") }}">
                        @error('title_ru')
                        <span id="title_ru-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="title_en">Заголовок EN</label>
                        <input type="text"
                               class="form-control @error('title_en') is-invalid @enderror"
                               name="title_en"
                               id="title_en"
                               value="{{ old('title_en') ?? ($homePageSettings ? $homePageSettings->title_en : "") }}">
                        @error('title_en')
                        <span id="title_en-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="description_uz"> Описание UZ</label>
                        <input type="text"
                               class="form-control @error('description_uz') is-invalid @enderror"
                               name="description_uz"
                               id="description_uz"
                               value="{{ old('title_uz') ?? ($homePageSettings ? $homePageSettings->description_uz : "") }}">
                        @error('description_uz')
                        <span id="description_uz-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="description_ru"> Описание RU</label>
                        <input type="text"
                               class="form-control @error('description_ru') is-invalid @enderror"
                               name="description_ru"
                               id="description_ru"
                               value="{{ old('description_ru') ?? ($homePageSettings ? $homePageSettings->description_ru : "") }}">
                        @error('description_ru')
                        <span id="description_ru-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-4">
                        <label for="description_en"> Описание EN</label>
                        <input type="text"
                               class="form-control @error('description_en') is-invalid @enderror"
                               name="description_en"
                               id="description_en"
                               value="{{ old('description_en') ?? ($homePageSettings ? $homePageSettings->description_en : "") }}">
                        @error('description_en')
                        <span id="description_en-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="work_time_from">Рабочее время с</label>
                        <input type="time" step="1"
                               class="form-control @error('work_time_from') is-invalid @enderror"
                               name="work_time_from"
                               id="work_time_from"
                               value="{{ old('work_time_from') ?? ($homePageSettings ? $homePageSettings->work_time_from : "") }}">
                        @error('work_time_from')
                        <span id="work_time_from-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="work_time_to">Рабочее время до</label>
                        <input type="time" step="1"
                               class="form-control @error('work_time_to') is-invalid @enderror"
                               name="work_time_to"
                               id="work_time_to"
                               value="{{ old('work_time_to') ?? ($homePageSettings ? $homePageSettings->work_time_to : "") }}">
                        @error('work_time_to')
                        <span id="work_time_to-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Обновить">
            </div>
        </form>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Редоктирование изображения</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('dashboard.home_page_setting.uploadFile')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body ">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="media">Выберите изображения</label>
                        <input type="file" multiple
                               class="form-control @error('media') is-invalid @enderror"
                               name="media[]"
                               id="media">
                        @error('media')
                        <span id="media-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="form-group col-6">
                        <label for="group">Выберите группу</label>
                        <select name="group" id="group" class="form-control @error('group') is-invalid @enderror">
                            <option value="" selected disabled>Выберите группу изоброжения</option>
                            <option value="images">Images Group</option>
                            <option value="home_page">Home Page Group</option>
                        </select>
                        @error('group')
                        <span id="group-error" class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-primary" value="Сохранить">
            </div>
        </form>
        <div class="card-body ">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Home Page Images</h1>
                    <div class="row">
                        @foreach($homePageMedia->where('group','=','home_page') as $media)
                            <div class="col-2">
                                @if(str_contains($media->path, 'videos'))
                                    <video width="100" height="100" controls >
                                        <source src="{{asset('/storage/' . $media->path)}}" type="video/mp4">
                                    </video>
                                @else
                                    <img class="img-fluid" src="{{asset('/storage/' . $media->path)}}" alt="" style="height: 100px; width: 100px">
                                @endif
                                <form action="{{route('dashboard.home_page_setting.deleteFile',$media->id)}}"
                                      method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn" type="submit"><i class="fa fa-sharp fa-solid fa-trash"
                                                                         style="color: red"></i></button>
                                </form>
                            </div>
                        @endforeach
                    </div>
            </div>
                <div class="col-12 mt-4">
                    <h1 class="text-center">Other Images</h1>
                    <div class="row">
                        @foreach($homePageMedia->where('group','=','images') as $media)
                            <div class="col-2">
                                @if(str_contains($media->path,'videos'))
                                    <video width="100" height="100" controls >
                                        <source src="{{asset('/storage/' . $media->path)}}" type="video/mp4">
                                    </video>
                                @else
                                    <img class="img-fluid" src="{{asset('/storage/' . $media->path)}}" alt="" style="height: 100px; width: 100px">
                                @endif
                                <form action="{{route('dashboard.home_page_setting.deleteFile',$media->id)}}"
                                      method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn" type="submit"><i class="fa fa-sharp fa-solid fa-trash"
                                                                         style="color: red"></i></button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
@endsection
