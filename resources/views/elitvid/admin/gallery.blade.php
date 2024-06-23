@extends('layouts.elitvid.admin.admin')

@section('admin_content')
    <!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Таблица картинок примеров работ</h3>
                    <p class="animated fadeInDown">
                        Таблица <span class="fa-angle-right fa"></span> Таблица картинок примеров работ
                    </p>
                </div>
                <ul class="nav navbar-nav">
                    <a href="{{route('create', ['route' => 'gallery'])}}">
                        <button class="btn ripple btn-outline btn-primary">
                            <div>
                                <span>Добавить картинки примеров работ</span>
                                <span class="ink"></span>
                            </div>
                        </button>
                    </a>
                </ul>
            </div>
        </div>
        <div class="col-md-12 top-20 padding-0">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading"><h3>Таблица картинок примеров работ кашпо</h3></div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Картинка</th>
                                    <th>Описание</th>
                                    <th>Время создания</th>
                                    <th>Время редактирования</th>
                                    <th>Опубликован</th>
                                    <th>Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($pots_images as $pots_image)
                                    @foreach($pots_image->images as  $image)
                                        <tr>
                                            <td>
                                                <img style="height: 200px" src="{{asset('storage/'.$image->image)}}"
                                                     alt="">
                                            </td>
                                            <td>
                                                <form
                                                    action="{{ route('gallery_image_update', ['image' => $image->id]) }}"
                                                    method="post">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="text" name="description_image"
                                                           value="{{$image->description_image}}">
                                                    <button type="submit" style="border: 0">
                                                        <input type="button" class=" btn btn-3d btn-primary"
                                                               value="Сохранить описание">
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{$pots_image->created_at}}</td>
                                            <td>{{$pots_image->updated_at}}</td>
                                            <td>
                                                @if($pots_image->active == 1)
                                                    Да
                                                @else
                                                    Нет
                                                @endif
                                            </td>
                                            <td>
                                                <form
                                                    action="{{ route('gallery_image_destroy', ['image' => $image, 'gallery' => $pots_image]) }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" style="border: 0">
                                                        <input type="button" class="btn btn-3d btn-danger"
                                                               value="Удалить">
                                                    </button>
                                                </form>
                                            </td>
{{--                                            <td>--}}
{{--                                                {{$image->id}}--}}
{{--                                                <form--}}
{{--                                                    action="{{ route('galleries.destroy', ['gallery' => $pots_image, 'image' => $image]) }}"--}}
{{--                                                    method="post">--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    @csrf--}}
{{--                                                    <button type="submit" style="border: 0">--}}
{{--                                                        <input type="button" class="btn btn-3d btn-danger"--}}
{{--                                                               value="Удалить">--}}
{{--                                                    </button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
                                        </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading"><h3>Таблица картинок примеров работ скамеек</h3></div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Картинка</th>
                                    <th>Описание</th>
                                    <th>Время создания</th>
                                    <th>Время редактирования</th>
                                    <th>Опубликован</th>
                                    <th>Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($benches_images as $benches_image)
                                    @foreach($benches_image->images as $image)
                                        <tr>
                                            <td>

                                                <img style="height: 200px" src="{{asset('storage/'.$image->image)}}"
                                                     alt="">
                                            </td>
                                            <td>
                                                <form
                                                    action="{{ route('gallery_image_update', ['image' => $image->id]) }}"
                                                    method="post">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="text" name="description_image"
                                                           value="{{$image->description_image}}">
                                                    <button type="submit" style="border: 0">
                                                        <input type="button" class=" btn btn-3d btn-primary"
                                                               value="Сохранить описание">
                                                    </button>
                                                </form>
                                            </td>
                                            <td>{{$benches_image->created_at}}</td>
                                            <td>{{$benches_image->updated_at}}</td>
                                            <td>
                                                @if($benches_image->active == 1)
                                                    Да
                                                @else
                                                    Нет
                                                @endif
                                            </td>
                                            <td>
                                                <form
                                                    action="{{ route('gallery_image_destroy', ['image' => $image, 'gallery' => $benches_image]) }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" style="border: 0">
                                                        <input type="button" class="btn btn-3d btn-danger"
                                                               value="Удалить">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: content -->
@endsection
