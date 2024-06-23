@extends('layouts.elitvid.elitvid')

@section('content')
    <main>
        @include('includes.elitvid.popup_call')
        @include('includes.elitvid.popup_application')
        <section class="main">
            <div class="description">
                <div class="description-text">
                    <h1>современные<br>малые формы</h1>
                    <p>Наш опыт и знания позволяют нам реализовать самые сложные и
                        оригинальные задачи по Вашим размерам, эскизам и чертежам.</p>
                </div>
                <div class="submit-application">
                    <button class="submit-application--button open_popup_application">
                        Оставить заявку
                    </button>
                </div>
                <div class="vertical-line--decor">
                    <div class="line"></div>
                </div>
            </div>
            <div class="stages">
                <div class="image">
                    <img src="{{asset('/elitvid_assets/imgs/main_page/main_page_up.png')}}" alt="Фотография три кашпо в ряд"
                         class="main-page-up">
                </div>
                <div class="stages--text">
                    <p>Проектирование</p>
                    <div class="vertical-line"></div>
                    <p>Производство</p>
                    <div class="vertical-line"></div>
                    <p>Монтаж</p>
                </div>
                <div class="submit-application submit-application--mobile">
                    <button class="submit-application--button open_popup_application1 submit-application-button--mobile">
                        Оставить заявку
                    </button>
                </div>
            </div>
        </section>
        <section class="advantages">
            <div class="lines-decor">
                <div class="horizontal-line--decor"></div>
                <div class="vertical-line--decor"></div>
            </div>
            <div class="description">
                <div class="image">
                    <img src="{{asset('/elitvid_assets/imgs/main_page/main_page_center.png')}}" alt="Фотография кашпо по центру"
                         class="main-page-center">
                </div>
                <div class="description-text">
                    <h2>Почему мы?</h2>
                    <h4>Изготовление и производство по индивидуальному проекту заказчика.</h4>
                    <div class="description-text--materials">
                        <h4>Качественные материалы</h4>
                        <p>Полистоун - искусственный камень, современный иновационный материал,
                            представляющий собой альтернативу натуральному камню.</p>
                    </div>
                    <div class="description-text--advantages">
                        <h4>Преимущества изделий из полистоуна для городской среды:</h4>
                        <ul>
                            <li>позволяет воплощать современные дизайнерские идеи;</li>
                            <li>прочность и долговечность, антивандальные;</li>
                            <li>устойчивость к атмосферным воздействиям (влага, солнце, жара, холод);</li>
                            <li>устойчивость к микротрещинам в отличие от бетона;</li>
                            <li>устойчивость к органическим растворителям (ацетон, щёлочи, кислоты и др)</li>
                            <li>возможность нанесения орнамента и логотипа.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="company-advantages">
                <div class="advantage">
                    <h3>15 +</h3>
                    <p>лет на рынке</p>
                </div>
                <div class="advantage">
                    <h3>120 +</h3>
                    <p>успешных проектов</p>
                </div>
                <div class="advantage">
                    <h3>100 +</h3>
                    <p>довольных клиентов</p>
                </div>
            </div>
        </section>
        <section class="partners">
            <h2>Наши партнеры</h2>
            <div class="partners_slider">
                <div class="partners__slider swiper">
                    <!-- Additional required wrapper -->
                    <div class="partners-swiper-wrapper__slider swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/game_stream.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/a100.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/Belorusneft.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/development_bank.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/green_haven.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/tobacco_invest.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/unisoil.jpg')}}" alt=""></div>
                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/vds.jpg')}}" alt=""></div>
{{--                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/vds.jpg')}}" alt=""></div>--}}
{{--                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/vds.jpg')}}" alt=""></div>--}}
{{--                        <div class="swiper-slide"><img src="{{asset('/elitvid_assets/imgs/main_page/partners/vds.jpg')}}" alt=""></div>--}}
                    </div>
                </div>
            </div>
            <div class="lines-decor">
                <div class="horizontal-line--decor"></div>
                <div class="vertical-line--decor"></div>
            </div>
        </section>
        <section class="produce">
            <h2>Наши направления</h2>
            <div class="directions">
                <div class="direction">
                    <div class="direction__image">
                        <img src="{{asset('/elitvid_assets/imgs/main_page/directions/pots.png')}} " alt="Фотография направления кашпо">
                    </div>
                    <a href="{{route('pots')}}">
                        <button>Кашпо</button>
                    </a>
                </div>
                <div class="slogan__direction">
                    <div class="slogan__direction-text">
                        <h4>Мы воплотим в реальность любую вашу идею!</h4>
                        <p>Работаем по индивидуальным размерам, эскизам и чертежам. Гарантируем качественное и
                            профессиональное
                            выполнение проекта. Наш опыт и знания позволяют реализовывать сложные и оригинальные задачи. Мы
                            осуществляем доставку в разные страны и стремимся к долгосрочному сотрудничеству. Доверьте нам
                            свои
                            идеи, и мы поможем воплотить их в жизнь.</p>
                    </div>

                </div>
                <div class="direction">
                    <div class="direction__image">
                        <img src="{{asset('/elitvid_assets/imgs/main_page/directions/benches.png')}}" alt="Фотография направления скамеек">
                    </div>
                    <a href="{{route('benches')}}">
                        <button>Скамьи</button>
                    </a>
                </div>
                <div class="direction">
                    <div class="direction__image">
                        <img src="{{asset('/elitvid_assets/imgs/main_page/directions/rotundas.png')}}"
                             alt="Фотография направления ротонд и коллонад">
                    </div>
                    <a href="">
                        <button>Ротонды и коллонады</button>
                    </a>
                </div>
                <div class="direction">
                    <div class="direction__image">
                        <img src="{{asset('/elitvid_assets/imgs/main_page/directions/parklets.png')}}"
                             alt="Фотография направления парклетов и навесов">
                    </div>

                    <a href="">
                        <button>Парклеты, навесы</button>
                    </a>
                </div>
                <div class="direction">
                    <div class="direction__image">
                        <img src="{{asset('/elitvid_assets/imgs/main_page/directions/bollards.png')}}"
                             alt="Фотография направления боллард и ограждений">
                    </div>
                    <a href="">
                        <button>Болларды и ограждения</button>
                    </a>
                </div>
                <div class="direction">
                    <div class="direction__image">
                        <img src="{{asset('/elitvid_assets/imgs/main_page/directions/pillars.png')}}"
                             alt="Фотография направления столбов и накрывок">
                    </div>
                    <a href="">
                        <button>Столбы и накрывки</button>
                    </a>
                </div>
                <div class="direction">

                    <div class="direction__image">
                        <img src="{{asset('/elitvid_assets/imgs/main_page/directions/facade_stucco.png')}}"
                             alt="Фотография направления фасадной лепнины и панелей">
                    </div>
                    <a href="">
                        <button>Фасадная лепнина и панели</button>
                    </a>
                </div>
            </div>
        </section>
        <section class="decorative_elements">
            <div class="lines-decor">
                <div class="vertical-line--decor"></div>
                <div class="horizontal-line--decor"></div>
                <div class="vertical-line-2--decor"></div>
            </div>
            <div class="decorative_elements__main">
                <div class="decorative_elements__description">
                    <div class="elements_main__headers">
                        <h2>Декоративные элементы</h2>
                        <h4>Изготовление и производство по индивидуальному проекту заказчика.</h4>
                    </div>
                    <div class="elements_main__paragraphs">
                        <p>Есть возможность нанести орнамент или логотип на ваше изделие. А так же разместить металлическую
                            вставку.</p>
                        <p>Полистоун - искусственный камень, современный иновационный материал, представляющий собой
                            альтернативу натуральному камню.</p>
                    </div>
                    <div class="elements_main__button">
                        <a href="{{route('decorations')}}">
                            <button>
                                ПОДРОБНЕЕ
                            </button>
                        </a>
                    </div>
                </div>
                <div class="decorative_elements__image">
                    <img src="{{asset('/elitvid_assets/imgs/main_page/decor.png')}}" alt="Картинка, описывающая декорации для продукции">
                </div>
            </div>
        </section>
        <section class="works">
            <h2>Наши работы</h2>
            <div class="produce-video">
                <iframe src="https://www.youtube.com/embed/ziCM3lxEoOQ?si=Fz5sCstSasMpl0n4&amp;controls=0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
            </div>
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
