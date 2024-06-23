@extends('layouts.elitvid.admin.admin')

@section('admin_content')
    <!-- start: Content -->
    <div id="content">
        <div class="panel box-shadow-none content-header">
            <div class="panel-body">
                <div class="col-md-12">
                    <h3 class="animated fadeInLeft">Таблицы скамеек</h3>
                    <p class="animated fadeInDown">
                        Таблицы <span class="fa-angle-right fa"></span> Таблицы скамеек
                    </p>
                </div>
                <ul class="nav navbar-nav">
                    <a href="{{route('create', ['route' => 'benches'])}}">
                        <button class="btn ripple btn-outline btn-primary">
                            <div>
                                <span>Добавить товар</span>
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
                    <div class="panel-heading"><h3>Коллекция Verona</h3></div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Материал</th>
                                    <th>Размеры</th>
                                    <th>Вес</th>
                                    <th>Цена</th>
                                    <th>Время создания</th>
                                    <th>Время редактирования</th>
                                    <th>Опубликован</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
{{--                                @if($benches_verona->isNotEmpty())--}}
                                    @foreach($benches_verona as $bench)
                                        <tr>
                                            <td>{{$bench->name}}</td>
                                            <td>{{ $bench->material}}</td>
                                            <td>{{ $bench->size}}</td>
                                            <td>{{ $bench->weight}}</td>
                                            <td>{{ $bench->price}}</td>
                                            <td>{{$bench->created_at}}</td>
                                            <td>{{$bench->updated_at}}</td>
                                            <td>
                                                @if($bench->active == 1)
                                                    Да
                                                @else
                                                    Нет
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('benchProducts.edit', ['benchProduct' => $bench]) }}">
                                                    <input type="button" class=" btn btn-3d btn-primary"
                                                           value="Редактировать">
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('benchProducts.destroy', ['benchProduct' => $bench]) }}"
                                                      method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" style="border: 0">
                                                        <input type="button" class="btn btn-3d btn-danger" value="Удалить">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
{{--                                @endif--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading"><h3>Коллекция Stones</h3></div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Материал</th>
                                    <th>Размеры</th>
                                    <th>Вес</th>
                                    <th>Цена</th>
                                    <th>Время создания</th>
                                    <th>Время редактирования</th>
                                    <th>Опубликован</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($benches_stones->isNotEmpty())
                                    @foreach($benches_stones as $bench)
                                        <tr>
                                            <td>{{$bench->name}}</td>
                                            <td>{{ $bench->material}}</td>
                                            <td>{{ $bench->size}}</td>
                                            <td>{{ $bench->weight}}</td>
                                            <td>{{ $bench->price}}</td>
                                            <td>{{$bench->created_at}}</td>
                                            <td>{{$bench->updated_at}}</td>
                                            <td>
                                                @if($bench->active == 1)
                                                    Да
                                                @else
                                                    Нет
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('benchProducts.edit', ['benchProduct' => $bench]) }}">
                                                    <input type="button" class=" btn btn-3d btn-primary"
                                                           value="Редактировать">
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('benchProducts.destroy', ['benchProduct' => $bench]) }}"
                                                      method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" style="border: 0">
                                                        <input type="button" class="btn btn-3d btn-danger" value="Удалить">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading"><h3>Коллекция Solo</h3></div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Материал</th>
                                    <th>Размеры</th>
                                    <th>Вес</th>
                                    <th>Цена</th>
                                    <th>Время создания</th>
                                    <th>Время редактирования</th>
                                    <th>Опубликован</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($benches_solo->isNotEmpty())
                                    @foreach($benches_solo as $bench)
                                        <tr>
                                            <td>{{$bench->name}}</td>
                                            <td>{{ $bench->material}}</td>
                                            <td>{{ $bench->size}}</td>
                                            <td>{{ $bench->weight}}</td>
                                            <td>{{ $bench->price}}</td>
                                            <td>{{$bench->created_at}}</td>
                                            <td>{{$bench->updated_at}}</td>
                                            <td>
                                                @if($bench->active == 1)
                                                    Да
                                                @else
                                                    Нет
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('benchProducts.edit', ['benchProduct' => $bench]) }}">
                                                    <input type="button" class=" btn btn-3d btn-primary"
                                                           value="Редактировать">
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('benchProducts.destroy', ['benchProduct' => $bench]) }}"
                                                      method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" style="border: 0">
                                                        <input type="button" class="btn btn-3d btn-danger" value="Удалить">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading"><h3>Коллекция lines</h3></div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Материал</th>
                                    <th>Размеры</th>
                                    <th>Вес</th>
                                    <th>Цена</th>
                                    <th>Время создания</th>
                                    <th>Время редактирования</th>
                                    <th>Опубликован</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($benches_lines->isNotEmpty())
                                    @foreach($benches_lines as $bench)
                                        <tr>
                                            <td>{{$bench->name}}</td>
                                            <td>{{ $bench->material}}</td>
                                            <td>{{ $bench->size}}</td>
                                            <td>{{ $bench->weight}}</td>
                                            <td>{{ $bench->price}}</td>
                                            <td>{{$bench->created_at}}</td>
                                            <td>{{$bench->updated_at}}</td>
                                            <td>
                                                @if($bench->active == 1)
                                                    Да
                                                @else
                                                    Нет
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('benchProducts.edit', ['benchProduct' => $bench]) }}">
                                                    <input type="button" class=" btn btn-3d btn-primary"
                                                           value="Редактировать">
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('benchProducts.destroy', ['benchProduct' => $bench]) }}"
                                                      method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" style="border: 0">
                                                        <input type="button" class="btn btn-3d btn-danger" value="Удалить">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="panel-heading"><h3>Коллекция Street furniture</h3></div>
                    <div class="panel-body">
                        <div class="responsive-table">
                            <table id="datatables-example" class="table table-striped table-bordered" width="100%"
                                   cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Название</th>
                                    <th>Материал</th>
                                    <th>Размеры</th>
                                    <th>Вес</th>
                                    <th>Цена</th>
                                    <th>Время создания</th>
                                    <th>Время редактирования</th>
                                    <th>Опубликован</th>
                                    <th>Редактировать</th>
                                    <th>Удалить</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($benches_street_furniture->isNotEmpty())
                                    @foreach($benches_street_furniture as $bench)
                                        <tr>
                                            <td>{{$bench->name}}</td>
                                            <td>{{ $bench->material}}</td>
                                            <td>{{ $bench->size}}</td>
                                            <td>{{ $bench->weight}}</td>
                                            <td>{{ $bench->price}}</td>
                                            <td>{{$bench->created_at}}</td>
                                            <td>{{$bench->updated_at}}</td>
                                            <td>
                                                @if($bench->active == 1)
                                                    Да
                                                @else
                                                    Нет
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('benchProducts.edit', ['benchProduct' => $bench]) }}">
                                                    <input type="button" class=" btn btn-3d btn-primary"
                                                           value="Редактировать">
                                                </a>
                                            </td>
                                            <td>
                                                <form action="{{ route('benchProducts.destroy', ['benchProduct' => $bench]) }}"
                                                      method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" style="border: 0">
                                                        <input type="button" class="btn btn-3d btn-danger" value="Удалить">
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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
