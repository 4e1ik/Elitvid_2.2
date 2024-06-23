@extends('layouts.elitvid.admin.admin')

@section('admin_content')
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <h1>Страница создания скамеек</h1>
        </div>
        <form action="{{ route('benchProducts.store')}}"
              enctype="multipart/form-data" method="post">
            @csrf
            <div class="col-md-12 padding-0">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <h3>Картинка</h3>
                                <div class="col-md-11">
                                    <input type="file" name="image[]" multiple="multiple"
                                           class="dropzone dz-clickable col-md-12"
                                           id="my-awesome-dropzone">
                                    {{--                                    @error('image')--}}
                                    {{--                                    <div class="text-danger">--}}
                                    {{--                                        {{$message}}--}}
                                    {{--                                    </div>--}}
                                    {{--                                    @enderror--}}
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
                                    <h3>Название товара</h3>
                                    <div class="col-md-11 padding-0">
                                        <input class="form-control {{$errors->has('name') ? 'danger' : ''}}"
                                               type="text"
                                               name="name" value="{{old('name')}}">
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
                                               name="material" value="{{old('material')}}">
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
                                                   name="size{{$i}}" value="{{old('size'.$i)}}">
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
                                            <input class="form-control {{$errors->has('weight'.$i) ? 'danger' : ''}}"
                                                   type="text"
                                                   name="weight{{$i}}" value="{{old('weight'.$i)}}">
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
                                                   name="price{{$i}}" value="{{old('price'.$i)}}">
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
                                        <option {{ $errors->has('type') ? '' : 'selected' }} disabled>Выберите коллекцию</option>
                                        <option {{ old('type') == 'Verona' ? 'selected' : ''}} value="Verona">Коллекция Verona</option>
                                        <option {{ old('type') == 'Stones' ? 'selected' : ''}}  value="Stones">Коллекция Stones</option>
                                        <option {{ old('type') == 'lines' ? 'selected' : ''}} value="lines">Коллекция lines</option>
                                        <option {{ old('type') == 'Solo' ? 'selected' : ''}} value="Solo">Коллекция Solo</option>
                                        <option {{ old('type') == 'Street_furniture' ? 'selected' : ''}} value="Street_furniture">Коллекция Street furniture</option>
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
                            <input type="submit" class="btn  btn-3d btn-success" value="Создать">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
