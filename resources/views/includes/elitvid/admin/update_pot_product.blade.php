@extends('layouts.elitvid.admin.admin')

@section('admin_content')
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <h1>Страница редактирования кашпо</h1>
        </div>
        @if($potImages->isNotEmpty())
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            @foreach($potImages as $potImage)
                                <div class="col-md-3">
                                    <div class="col-md-12 padding-0">
                                        <form
                                            action="{{ route('pot_image_destroy', ['potImage' => $potImage, 'potProduct' => $potProduct]) }}"
                                            method="post">
                                            @method('DELETE')
                                            @csrf
                                            <img style="height: 200px; border-radius:15px"
                                                 src="{{ asset('storage/'.$potImage->image) }}" alt="">
                                            <button type="submit" style="border: 0;">
                                                <input type="button" class="btn btn-3d btn-danger" value="Удалить">
                                            </button>
                                        </form>
                                        <form
                                            action="{{ route('pot_image_update', ['potImage' => $potImage, 'potProduct' => $potProduct]) }}"
                                            method="post">
                                            @method('PUT')
                                            @csrf
                                            <h3>Отредактировать описание</h3>
                                            <input type="text" name="description_image"
                                                   value="{{$errors->has('description_image') ? old('description_image') : $potImage->description_image}}">
                                            @error('description_image')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <h3>Цвет</h3>
                                            <select class="form-control" name="color"
                                                    id="">
                                                <option {{ $errors->has('type') ? '' : 'selected' }} disabled>Выберите
                                                    цвет
                                                </option>
                                                <option {{ $potImage->color == 'grey' ? 'selected' : ''}} value="grey">
                                                    Серый
                                                </option>
                                                <option {{ $potImage->color == 'graphite' ? 'selected' : ''}} value="graphite">
                                                    Графит
                                                </option>
                                                <option {{ $potImage->color == 'black' ? 'selected' : ''}} value="black">
                                                    Черный
                                                </option>
                                                <option {{ $potImage->color == 'white' ? 'selected' : ''}} value="white">
                                                    Белый
                                                </option>
                                                <option {{ $potImage->color == 'ivory' ? 'selected' : ''}} value="ivory">
                                                    Слоновая кость
                                                </option>
                                                <option {{ $potImage->color == 'sand' ? 'selected' : ''}} value="sand">
                                                    Песочный
                                                </option>
                                                <option {{ $potImage->color == 'orange' ? 'selected' : ''}} value="orange">
                                                    Оранжевый
                                                </option>
                                                <option {{ $potImage->color == 'olive' ? 'selected' : ''}} value="olive">
                                                    Оливка
                                                </option>
                                                <option {{ $potImage->color == 'malachite' ? 'selected' : ''}} value="malachite">
                                                    Малахит
                                                </option>
                                                <option {{ $potImage->color == 'white_blue' ? 'selected' : ''}} value="white_blue">
                                                    Голубой
                                                </option>
                                                <option {{ $potImage->color == 'blue' ? 'selected' : ''}} value="blue">
                                                    Синий
                                                </option>
                                                <option {{ $potImage->color == 'bronze' ? 'selected' : ''}} value="bronze">
                                                    Бронза
                                                </option>
                                            </select>
                                            @error('color')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <h3>Текстура</h3>
                                            {{--                                {{old('texture') ? '1' : '2'}}--}}
                                            <select class="form-control" name="texture" id="">
                                                <option {{ $errors->has('texture') ? '' : 'selected' }} disabled>Выберите
                                                    текстуру
                                                </option>
                                                <option {{ $potImage->texture == 'porous' ? 'selected' : ''}} value="porous">
                                                    Пористая
                                                </option>
                                                <option {{ $potImage->texture == 'smooth' ? 'selected' : ''}} value="smooth">
                                                    Гладкая
                                                </option>
                                                {{--                                    <option {{ old('texture') == 'smooth' ? 'selected' : ''}} value="smooth">Гладкая</option>--}}
                                                <option {{ $potImage->texture == 'marble' ? 'selected' : ''}} value="marble">
                                                    Мрамор
                                                </option>
                                                <option {{ $potImage->texture == 'blitz' ? 'selected' : ''}} value="blitz">
                                                    Блиц
                                                </option>
                                                <option {{ $potImage->texture == 'wild' ? 'selected' : ''}} value="wild">
                                                    Дикий камень
                                                </option>
                                            </select>
                                            @error('texture')
                                            <div class="text-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                            <button type="submit" style="border: 0; margin-bottom: 20px; margin-top: 20px">
                                                <input type="button" class="btn btn-3d" value="Отредактировать описание">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <form action="{{route('potProducts.update', ['potProduct' => $potProduct])}}" enctype="multipart/form-data"
              method="post">
            @method('PUT')
            @csrf
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <h3>Добавить картинку</h3>
                                <div class="col-md-11">
                                    <input type="file" name="image[]" multiple="multiple"
                                           class="dropzone dz-clickable col-md-12"
                                           id="my-awesome-dropzone">
                                    @error('image')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="col-md-3 padding-0">
                                    <h3>Отредактировать название товара</h3>
                                    <div class="col-md-11 padding-0">
                                        <input class="form-control {{$errors->has('name') ? 'danger' : ''}}"
                                               type="text"
                                               name="name"
                                               value="{{$errors->has('name') ? old('name') : $potProduct->name}}">
                                    </div>
                                    @error('name')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-3 padding-0">
                                    <h3>Материал</h3>
                                    <div class="col-md-11 padding-0">
                                        <input class="form-control {{$errors->has('material') ? 'danger' : ''}}"
                                               type="text"
                                               name="material"
                                               value="{{$errors->has('material') ? old('material') : $potProduct->material}}">
                                    </div>
                                    @error('material')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <input name="size" type="hidden" value="">
                            <input name="weight" type="hidden" value="">
                            <input name="price" type="hidden" value="">
                            @for($i=1; $i<=5;  $i++)
                                <div style="margin-top: 20px" class="col-md-12">
                                    <h4 style="margin-bottom: -15px">Строка {{$i}}</h4>
                                    <div class="col-md-4 padding-0">
                                        <h3>Размер</h3>
                                        <div class="col-md-11 padding-0">
                                            <input class="form-control {{$errors->has('size'.$i) ? 'danger' : ''}}"
                                                   type="text"
                                                   name="size{{$i}}"
                                                   value="{{array_key_exists($i-1, $sizes) ? ($errors->has('size') ? old('size'.$i) : $sizes[$i-1]) : ''}}">
                                        </div>
                                        @error('size'.$i)
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 padding-0">
                                        <h3>Вес</h3>
                                        <div class="col-md-11 padding-0">
                                            <input
                                                    class="form-control {{$errors->has('weight'.$i) ? 'danger' : ''}}"
                                                    type="text"
                                                    name="weight{{$i}}"
                                                    value="{{array_key_exists($i-1, $weights) ? ($errors->has('weights') ? old('weights'.$i) : $weights[$i-1]) : ''}}">
                                        </div>
                                        @error('weight'.$i)
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 padding-0">
                                        <h3>Цена</h3>
                                        <div class="col-md-11 padding-0">
                                            <input class="form-control {{$errors->has('price'.$i) ? 'danger' : ''}}"
                                                   type="text"
                                                   name="price{{$i}}"
                                                   value="{{array_key_exists($i-1, $prices) ? ($errors->has('prices') ? old('prices'.$i) : $prices[$i-1]) : ''}}">
                                        </div>
                                        @error('price'.$i)
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="col-md-12">
                                <div class="col-md-3 padding-0">
                                    <h2>Форма</h2>
                                    <select class="form-control" name="collection"
                                            id="">
                                        <option {{ $errors->has('collection') ? '' : 'selected' }} disabled>Выберите
                                            форму
                                        </option>
                                        <option {{ $potProduct->collection == 'Square' ? 'selected' : ''}} value="Square">
                                            Квадратное кашпо
                                        </option>
                                        <option {{ $potProduct->collection == 'Round' ? 'selected' : ''}}  value="Round">
                                            Круглое кашпо
                                        </option>
                                        <option {{ $potProduct->collection == 'Rectangular' ? 'selected' : ''}} value="Rectangular">
                                            Прямоугольные кашпо
                                        </option>
                                    </select>
                                    @error('collection')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4 padding-0">
                                    <h3>Сделать активным?</h3>
                                    <div class="form-group">
                                        <div class="col-md-10">
                                            <div class="col-md-1 padding-0">
                                                <input type="radio" name="active" value="1"> Да
                                            </div>
                                            <div class="col-md-1 padding-0">
                                                <input type="radio" name="active" value="0"> Нет
                                            </div>
                                        </div>
                                    </div>
                                    @error('active')
                                    <div class="text-danger">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <input type="submit" class="btn  btn-3d btn-success" value="Обновить">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
