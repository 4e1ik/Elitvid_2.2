@extends('layouts.elitvid.elitvid')

@section('content')
    <main>
        @include('includes.elitvid.popup_call')
        @include('includes.elitvid.popup_application')
        @include('includes.elitvid.breadcrumbs')
        <section class="main">
            <div class="description">
                <div class="description-text">
                    <h1>декоративные<br>элементы</h1>
                    <p>Изготовим изделие любой сложности с арнаментом, логотипом, металлической вставкой по Вашему эскизу или чертежу!</p>
                </div>
                <div class="submit-application">
                    <button class="submit-application--button open_popup_application">
                        Оставить заявку
                    </button>
                </div>
            </div>
            <div class="stages">
                <div class="image">
                    <img src="{{asset('/elitvid_assets/imgs/main_page/main_page_up.png')}}" alt="Фотография три кашпо в ряд"
                         class="main-page-up">
                </div>
                <div class="submit-application submit-application--mobile">
                    <button class="submit-application--button open_popup_application1 submit-application-button--mobile">
                        Оставить заявку
                    </button>
                </div>
            </div>
        </section>
        <section class="not_main_page technique-blitz">
            <h2>Техника блиц</h2>
            <p>Подходит для кашпо всех форм. Роскошная фактура для классического интерьера.</p>
            <div class="technique-blitz__content">
                <div class="content__decorative-textures">
                    <div class="decorative-texture__card unique">
                        <h4>Цвета фактуры</h4>
                        <div class="card__list-textures">
                            <p>01 Белый</p>
                            <p>02 Золото</p>
                            <p>03 Серебро</p>
                            <p>04 Бронза</p>
                        </div>
                    </div>
                    <div class="decorative-texture__card">
                        <img src="{{asset('/elitvid_assets/imgs/decorations/gold.png')}}" alt="">
                        <!--                    <p>02</p>-->
                    </div>
                    <div class="decorative-texture__card">
                        <img src="{{asset('/elitvid_assets/imgs/decorations/silver.png')}}" alt="">
                        <!--                    <p>03</p>-->
                    </div>
                    <div class="decorative-texture__card">
                        <img src="{{asset('/elitvid_assets/imgs/decorations/white.png')}}" alt="">
                        <!--                    <p>01</p>-->
                    </div>
                    <div class="decorative-texture__card">
                        <img src="{{asset('/elitvid_assets/imgs/decorations/bronze.png')}}" alt="">
                        <!--                    <p>04</p>-->
                    </div>
                </div>
            </div>
            <div class="decorative-texture__card unique unique-mobile">
                <h4>Цвета фактуры</h4>
                <div class="card__list-textures">
                    <p>01 Белый</p>
                    <p>02 Золото</p>
                    <p>03 Серебро</p>
                    <p>04 Бронза</p>
                </div>
            </div>
            <img class="background-img" src="{{asset('/elitvid_assets/imgs/decorations/blitz_plant.png')}}" alt="">
        </section>
        <section class="wild-stone">
            <h2>Дикий камень</h2>
            <p>Подходит для кашпо всех форм. Роскошная фактура для классического интерьера.</p>
            <div class="wild-stone__content">
                <div class="content__decorative-textures">
                    <div class="decorative-texture__card">
                        <img src="{{asset('/elitvid_assets/imgs/decorations/gray_concrete.png')}}" alt="">
                        <!--                    <p>02</p>-->
                    </div>
                    <div class="decorative-texture__card">
                        <img src="{{asset('/elitvid_assets/imgs/decorations/black.png')}}" alt="">
                        <!--                    <p>03</p>-->
                    </div>
                    <div class="decorative-texture__card">
                        <img src="{{asset('/elitvid_assets/imgs/decorations/graphite.png')}}" alt="">
                        <!--                    <p>04</p>-->
                    </div>
                    <div class="decorative-texture__card unique">
                        <h4>Цвета фактуры</h4>
                        <div class="card__list-textures">
                            <p>01 Серый бетон</p>
                            <p>02 Графит</p>
                            <p>03 Черный</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="decorative-texture__card unique unique-mobile">
                <h4>Цвета фактуры</h4>
                <div class="card__list-textures">
                    <p>01 Белый</p>
                    <p>02 Золото</p>
                    <p>03 Серебро</p>
                    <p>04 Бронза</p>
                </div>
            </div>
            <img class="background-img" src="{{asset('/elitvid_assets/imgs/decorations/wild_plant.png')}}" alt="">
        </section>
        <section class="ornament">
            <h2>Орнамент</h2>
            <p>Орнамент придает изделию уникальность и индивидуальность, делая его  более привлекательным. Возможны различные варианты.</p>
            <div class="ornament__content">
                <img class="decor" src="{{asset('/elitvid_assets/imgs/decorations/decor.png')}}" alt="">
                <img class="decor_pot" src="{{asset('/elitvid_assets/imgs/decorations/decor_pot.png')}}" alt="">
            </div>
        </section>
        <section class="works">
            <h2>Примеры работ</h2>
            <div class="works-examples">
                <div class="main__slider swiper">
                    <!-- Additional required wrapper -->
                    <div class="main-swiper-wrapper__slider swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                    </div>

                    <!-- If we need navigation buttons -->
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
                <div class="thumbs__slider swiper">
                    <!-- Additional required wrapper -->
                    <div class="main-swiper-wrapper__slider swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/slider/1180x592.png')}}" alt=""></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
