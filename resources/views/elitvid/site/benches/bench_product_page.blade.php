@extends('layouts.elitvid.elitvid')

@section('content')

    <main>
        @include('includes.elitvid.popup_call')
        @include('includes.elitvid.popup_application')
        @include('includes.elitvid.breadcrumbs')
        <section class="product">
            @foreach($products as $product)
                <h2>Кашпо {{$product->name}}</h2>
{{--                <div class="product__content">--}}
{{--                    <div class="product_content__images">--}}
{{--                        <div class="content_images__textures">--}}
{{--                            <h4>Фактуры:</h4>--}}
{{--                            <p class="images_textures__text">Выберите фактуру и цвет для визуализации кашпо</p>--}}
{{--                            <div class="images_textures__images">--}}
{{--                                <div class="image_texture">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/textures/texture-porous.png')}}" alt="">--}}
{{--                                    <p>Пористая</p>--}}
{{--                                    <img class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-porous.png')}}"--}}
{{--                                         alt="">--}}
{{--                                    <p class="texture_popup__text">Пористая</p>--}}
{{--                                </div>--}}
{{--                                <div class="image_texture">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/textures/texture-smooth.png')}}" alt="">--}}
{{--                                    <p>Гладкая</p>--}}
{{--                                    <img class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-smooth.png')}}"--}}
{{--                                         alt="">--}}
{{--                                    <p class="texture_popup__text">Гладкая</p>--}}
{{--                                </div>--}}
{{--                                <div class="image_texture">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/textures/texture-marble.png')}}" alt="">--}}
{{--                                    <p>Мрамор</p>--}}
{{--                                    <img class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-marble.png')}}"--}}
{{--                                         alt="">--}}
{{--                                    <p class="texture_popup__text">Мрамор</p>--}}
{{--                                </div>--}}

{{--                                <div class="image_texture">--}}
{{--                                    <img data-texture="пористый" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-porous.png')}}" alt="">--}}
{{--                                    <p>Пористая</p>--}}
{{--                                    <img data-texture="пористый" class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-porous.png')}}"--}}
{{--                                         alt="">--}}
{{--                                    <p class="texture_popup__text">Пористая</p>--}}
{{--                                </div>--}}
{{--                                <div class="image_texture">--}}
{{--                                    <img data-texture="гладкий" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-smooth.png')}}" alt="">--}}
{{--                                    <p>Гладкая</p>--}}
{{--                                    <img data-texture="гладкий" class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-smooth.png')}}"--}}
{{--                                         alt="">--}}
{{--                                    <p class="texture_popup__text">Гладкая</p>--}}
{{--                                </div>--}}
{{--                                <div class="image_texture">--}}
{{--                                    <img data-texture="мрамор" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-marble.png')}}" alt="">--}}
{{--                                    <p>Мрамор</p>--}}
{{--                                    <img data-texture="мрамор" class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-marble.png')}}"--}}
{{--                                         alt="">--}}
{{--                                    <p class="texture_popup__text">Мрамор</p>--}}
{{--                                </div>--}}

{{--                                <div class="image_texture">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/textures/texture-blitz.png')}}" alt="">--}}
{{--                                    <p>Блиц</p>--}}
{{--                                    <img class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-blitz.png')}}"--}}
{{--                                         alt="">--}}
{{--                                    <p class="texture_popup__text">Блиц</p>--}}
{{--                                </div>--}}
{{--                                <div class="image_texture">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/textures/texture-wild_stone.png')}}" alt="">--}}
{{--                                    <p>Дикий камень</p>--}}
{{--                                    <img class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-wild_stone.png')}}"--}}
{{--                                         alt="">--}}
{{--                                    <p class="texture_popup__text">Дикий камень</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="content_images__main-image">--}}
{{--                            <img src="{{asset('storage/'.$product->bench_images[0]->image)}}" alt="">--}}
{{--                            <img id="image" src="{{asset('storage/images/'.$product->name)}}" alt="">--}}
{{--                        </div>--}}
{{--                        <div class="content_images__colors">--}}
{{--                            <h4>Цвета</h4>--}}
{{--                            <div class="images_colors__images">--}}
{{--                                <div data-color="серый бетон" data-title="Серый бетон" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/grey_concrete_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="графит" data-title="Графит" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/graphite_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="чёрный" data-title="Черный" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/black_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="белый" data-title="Белый" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/white_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="слоновая кость" data-title="Слоновая кость" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/ivory_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="песочный" data-title="Песочный" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/sand_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="оранжевый" data-title="Оранжевый" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/orange_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="оливка" data-title="Оливка" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/olive_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="малахит" data-title="Малахит" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/malachite_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="голубой" data-title="Голубой" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/white-blue_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="синий" data-title="Синий" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/blue_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div data-color="бронза" data-title="Бронза" class="image_color">--}}
{{--                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/bronze_color.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product_content__table">--}}
{{--                        <div class="content_table__title">--}}
{{--                            <h4>Материал:</h4>--}}
{{--                            <p>{{$product->material}}</p>--}}
{{--                        </div>--}}
{{--                        <div class="content_table__table">--}}
{{--                            @foreach($rows  as  $row)--}}
{{--                                <div class="table__row">--}}
{{--                                    <div class="table_row__size">--}}
{{--                                        <p>Размер</p>--}}
{{--                                        <p>{{explode('|',$row)[0]}}</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="table_row__vertical-line"></div>--}}
{{--                                    <div class="table_row__weight">--}}
{{--                                        <p>Вес</p>--}}
{{--                                        <p class="thumbnail">{{explode('|',$row)[1]}} кг</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="table_row__price">--}}
{{--                                        <p>Цена</p>--}}
{{--                                        <p class="thumbnail price">от {{explode('|',$row)[2]}}</p>--}}
{{--                                        <p class="thumbnail mobile-price">от {{explode('/', explode('|',$row)[2])[0]}} / <br> {{explode('/', explode('|',$row)[2])[1]}}</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="content_table__description">--}}
{{--                            <p>*Изготовим по Вашему проекту, эскизу</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="product__content">
                    <div class="product_content__images">
                        <div class="content_images__textures">
                            <h4>Фактуры</h4>
                            <div class="images_textures__images">
                                <div class="image_texture">
                                    <img data-texture="пористый" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-porous.png')}}" alt="">
                                    <p>Пористая</p>
                                    <img data-texture="пористый" class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-porous.png')}}"
                                         alt="">
                                    <p class="texture_popup__text">Пористая</p>
                                </div>
                                <div class="image_texture">
                                    <img data-texture="гладкий" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-smooth.png')}}" alt="">
                                    <p>Гладкая</p>
                                    <img data-texture="гладкий" class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-smooth.png')}}"
                                         alt="">
                                    <p class="texture_popup__text">Гладкая</p>
                                </div>
                                <div class="image_texture">
                                    <img data-texture="мрамор" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-marble.png')}}" alt="">
                                    <p>Мрамор</p>
                                    <img data-texture="мрамор" class="texture_popup__image" src="{{asset('/elitvid_assets/imgs/pots/textures/texture-marble.png')}}"
                                         alt="">
                                    <p class="texture_popup__text">Мрамор</p>
                                </div>
                            </div>
                        </div>
                        <div class="content_images__main-image">
                            <img src="{{asset('storage/'.$product->bench_images[0]->image)}}" alt="">
                            {{--                            <img id="image" src="{{asset('storage/images/'.$product->name)}}" alt="">--}}
                        </div>
                        <div class="content_images__colors">
                            <h4>Цвета</h4>
                            <div class="images_colors__images">
                                <div data-color="серый бетон" data-title="Серый бетон" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/grey_concrete_color.png')}}" alt="">
                                </div>
                                <div data-color="графит" data-title="Графит" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/graphite_color.png')}}" alt="">
                                </div>
                                <div data-color="чёрный" data-title="Черный" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/black_color.png')}}" alt="">
                                </div>
                                <div data-color="белый" data-title="Белый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/white_color.png')}}" alt="">
                                </div>
                                <div data-color="слоновая кость" data-title="Слоновая кость" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/ivory_color.png')}}" alt="">
                                </div>
                                <div data-color="песочный" data-title="Песочный" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/sand_color.png')}}" alt="">
                                </div>
                                <div data-color="оранжевый" data-title="Оранжевый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/orange_color.png')}}" alt="">
                                </div>
                                <div data-color="оливка" data-title="Оливка" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/olive_color.png')}}" alt="">
                                </div>
                                <div data-color="малахит" data-title="Малахит" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/malachite_color.png')}}" alt="">
                                </div>
                                <div data-color="голубой" data-title="Голубой" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/white-blue_color.png')}}" alt="">
                                </div>
                                <div data-color="синий" data-title="Синий" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/blue_color.png')}}" alt="">
                                </div>
                                <div data-color="бронза" data-title="Бронза" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/pots/colors/bronze_color.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="content_images__colors content_images_boards-colors--mobile">
                            <h4>Цвета древесины</h4>
                            <div class="images_colors__images images_color-boards__images">
                                <div data-title="Серый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/bench-color.png')}}" alt="">
                                </div>
                                <div data-title="Серый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/bench-color.png')}}" alt="">
                                </div>
                                <div data-title="Серый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/bench-color.png')}}" alt="">
                                </div>
                                <div data-title="Серый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/bench-color.png')}}" alt="">
                                </div>
                                <div data-title="Серый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/bench-color.png')}}" alt="">
                                </div>
                                <div data-title="Серый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/bench-color.png')}}" alt="">
                                </div>
                                <div data-title="Серый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/bench-color.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product_content__table product_content__table-bench">
                        <div class="content_table__general">
                            <div class="content_table__title">
                                <h4>Материал:</h4><p>Полимербетон</p>
                            </div>
                            <div class="content_table__table">
                                <div class="table__row">
                                    <div class="table_row__size">
                                        <p>Размер</p>
                                        <p>40x40x40</p>
                                    </div>
                                    <div class="table_row__vertical-line"></div>
                                    <div class="table_row__weight">
                                        <p>Вес</p>
                                        <p class="thumbnail">20 кг</p>
                                    </div>
                                    <div class="table_row__price">
                                        <p>Цена</p>
                                        <p class="thumbnail price">520 BYN / 19 240 RUB</p>
                                        <p class="thumbnail mobile-price">520 BYN / <br> 19 240 RUB</p>
                                    </div>
                                </div>
                                <div class="table__row">
                                    <div class="table_row__size">
                                        <p>Размер</p>
                                        <p>40x40x40</p>
                                    </div>
                                    <div class="table_row__vertical-line"></div>
                                    <div class="table_row__weight">
                                        <p>Вес</p>
                                        <p class="thumbnail">20 кг</p>
                                    </div>
                                    <div class="table_row__price">
                                        <p>Цена</p>
                                        <p class="thumbnail price">520 BYN / 19 240 RUB</p>
                                        <p class="thumbnail mobile-price">520 BYN / <br> 19 240 RUB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="content_table__description">
                                <p>*Изготовим по Вашему проекту, эскизу</p>
                                <p>*Есть возможность добавить подсветку к любому изделию</p>
                            </div>
                        </div>
                        <div class="content_images__colors content_images__boards-colors">
                            <h4>Цвета древесины</h4>
                            <div class="images_colors__images content_images_boards-colors">
                                <div data-title="Белый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/white.png')}}" alt="">
                                </div>
                                <div data-title="Серый" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/grey.png')}}" alt="">
                                </div>
                                <div data-title="Бесцветный" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/no_color.png')}}" alt="">
                                </div>
                                <div data-title="Сосна" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/pine.png')}}" alt="">
                                </div>
                                <div data-title="Тик" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/teak.png')}}" alt="">
                                </div>
                                <div data-title="Мерабу" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/merabu.png')}}" alt="">
                                </div>
                                <div data-title="Дуб" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/oak.png')}}" alt="">
                                </div>
                                <div data-title="Палисандр" class="image_color">
                                    <img src="{{asset('/elitvid_assets/imgs/benches/colors/rosewood.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submit-application">
                    <button class="submit-application--button open_popup_application">
                        Оставить заявку
                    </button>
                </div>
                <div class="submit-application submit-application--mobile">
                    <button class="submit-application--button open_popup_application1 submit-application-button--mobile">
                        Оставить заявку
                    </button>
                </div>
            @endforeach
        </section>
        <section class="offered_products">
            <h2>Другие формы</h2>
            <div class="offered_product_slider">
                <div class="offered_product__slider swiper">
                    <!-- Additional required wrapper -->
                    <div class="offered_product-swiper-wrapper__slider swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="direction">
                                <img src="{{asset('/elitvid_assets/imgs/pots/forms/circle_pot.png')}}" alt="Фотография направления кашпо">
                                <a href="">
                                    <button>Cylider</button>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="direction">
                                <img src="{{asset('/elitvid_assets/imgs/pots/forms/rectangular_pot.png')}}" alt="Фотография направления кашпо">
                                <a href="">
                                    <button>Cylider</button>
                                </a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="direction">
                                <img src="{{asset('/elitvid_assets/imgs/pots/forms/square_pot.png')}}" alt="Фотография направления кашпо">
                                <a href="">
                                    <button>Cylider</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-prev arrow-left arrow">
                        <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Line 1" d="M9.54419 1.5L2.45559 9L9.54419 16.5" stroke="white" stroke-width="2.99575"
                                  stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="swiper-button-next arrow-right arrow">
                        <svg width="12" height="18" viewBox="0 0 12 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Line 1" d="M2.45581 1.5L9.54441 9L2.45581 16.5" stroke="white" stroke-width="2.99575"
                                  stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
