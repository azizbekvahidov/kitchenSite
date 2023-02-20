@extends('layouts.admin')

@section('content-header')
    Обновить меню
@endsection

@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <a href="{{ route('dashboard.menu.index') }}">Меню</a>
    </li>
    <li class="breadcrumb-item active">Редоктирование</li>
@endsection

@section('content')

    <form action="{{route('dashboard.menu.update',$menu->id)}}" method="post">
        @csrf
        @method('Patch')
        <div class="card-body">
            <div class="row">
                <div class="form-group col-4">
                    <label for="name_uz">Имя UZ</label>
                    <input type="text" class="form-control @error('name_uz') is-invalid @enderror"
                           id="name_uz" name="name_uz"
                           value="{{old('name_ru') ?? $menu->name_uz}}">
                    @error('name_uz')
                    <span id="name_uz-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="name_ru">Имя RU</label>
                    <input type="text" class="form-control @error('name_ru') is-invalid @enderror"
                           id="name_ru" name="name_ru"
                           value="{{old('name_ru') ?? $menu->name_ru}}">
                    @error('name_ru')
                    <span id="name_ru-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="name_en">Имя EN</label>
                    <input type="text" class="form-control @error('name_en') is-invalid @enderror"
                           id="name_en" name="name_en"
                           value="{{old('name_ru') ?? $menu->name_en}}">
                    @error('name_en')
                    <span id="name_en-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="description_uz">Описание UZ</label>
                    <textarea class="form-control @error('description_uz') is-invalid @enderror"
                              name="description_uz" rows="3" id="description_uz">
                        {{old('name_ru') ?? $menu->description_uz}}
                    </textarea>
                    @error('description_uz')
                    <span id="description_uz-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="description_ru">Описание RU</label>
                    <textarea class="form-control @error('description_ru') is-invalid @enderror"
                              name="description_ru" rows="3" id="description_ru">
                        {{old('name_ru') ?? $menu->description_ru}}
                    </textarea>
                    @error('description_ru')
                    <span id="description_ru-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="description_en">Описание EN</label>
                    <textarea class="form-control @error('description_en') is-invalid @enderror"
                              name="description_en" rows="3" id="description_en">
                        {{old('name_ru') ?? $menu->description_en}}
                    </textarea>
                    @error('description_en')
                    <span id="description_en-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="price">Цена</label>
                    <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" id="price"
                           value="{{old('name_ru') ?? $menu->price}}">
                    @error('price')
                    <span id="price-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="branch_id">Выберите филиал</label>
                    <select name="branch_id" id="branch_id" class="form-control @error('branch_id') is-invalid @enderror"
                            data-dependent="menu_category_id">
                        @foreach($branches as $branch)
                            <option value="{{$branch->id}}"
                                {{$branch->id == $menu->menuCategory->branch_id ? 'selected' : ""}}
                            >{{$branch->name_ru}}</option>
                        @endforeach
                    </select>
                    @error('branch_id')
                    <span id="branch_id-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group col-4">
                    <label for="menu_category_id">Выберите категорию</label>
                    <select name="menu_category_id" id="menu_category_id" class="form-control @error('menu_category_id') is-invalid @enderror">
                        @foreach($categoryBranch as $category)
                            <option value="{{$category->id}}"
                                {{$category->id == $menu->category_id ? 'selected' : ""}}
                            >{{$category->name_ru}}</option>
                        @endforeach
                    </select>
                    @error('menu_category_id')
                    <span id="menu_category_id-error" class="error invalid-feedback">{{$message}}</span>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary btn-sm col-2 float-right">Обновить</button>
        </div>
    </form>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#branch_id').change(function () {
                if ($(this).val() === '') {
                    console.log('fghj');
                    return;
                }

                let value = $(this).val();

                $.ajax({
                    url: "{{ route('dashboard.menu_category.list') }}",
                    method: "get",
                    data: {
                        branch_id: value,
                    },
                    success: function (result) {
                        let output = '<option value="" selected disabled> Выберите категорию для меню</option>';
                        console.log(result);
                        for (let i=0;i<result.length;i++){
                            let category = result[i];
                            output +='<option value="'+category.id+'">'+category.name_ru+'</option>';
                        }
                        $('#menu_category_id').html(output);
                    }
                })

            })
        });
    </script>
@endsection
