@extends('layouts.elitvid.elitvid')

@section('content')
    <main>
        @include('includes.elitvid.popup_call')
        @include('includes.elitvid.popup_application')
        @include('includes.elitvid.breadcrumbs')
        <section class="main">
            <div class="description">
                <div class="description-text">
                    <h1>Скамьи</h1>
                    <p>Доверьте нам свои идеи, и мы поможем Вам воплотить их в жизнь. Свяжитесь с нами сегодня и начните реализацию своего проекта!</p>
                </div>
                <div class="submit-application">
                    <button class="submit-application--button open_popup_application">
                        Оставить заявку
                    </button>
                </div>
                <div class="download_catalog">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M0.75 14.8545C0.948912 14.8545 1.13968 14.9335 1.28033 15.0742C1.42098 15.2148 1.5 15.4056 1.5 15.6045V19.3545C1.5 19.7523 1.65804 20.1338 1.93934 20.4152C2.22064 20.6965 2.60218 20.8545 3 20.8545H21C21.3978 20.8545 21.7794 20.6965 22.0607 20.4152C22.342 20.1338 22.5 19.7523 22.5 19.3545V15.6045C22.5 15.4056 22.579 15.2148 22.7197 15.0742C22.8603 14.9335 23.0511 14.8545 23.25 14.8545C23.4489 14.8545 23.6397 14.9335 23.7803 15.0742C23.921 15.2148 24 15.4056 24 15.6045V19.3545C24 20.1501 23.6839 20.9132 23.1213 21.4758C22.5587 22.0384 21.7956 22.3545 21 22.3545H3C2.20435 22.3545 1.44129 22.0384 0.87868 21.4758C0.316071 20.9132 0 20.1501 0 19.3545V15.6045C0 15.4056 0.0790176 15.2148 0.21967 15.0742C0.360322 14.9335 0.551088 14.8545 0.75 14.8545Z"
                                  fill="white"/>
                            <path d="M11.4699 17.7839C11.5396 17.8538 11.6224 17.9092 11.7135 17.947C11.8046 17.9848 11.9023 18.0043 12.0009 18.0043C12.0996 18.0043 12.1973 17.9848 12.2884 17.947C12.3795 17.9092 12.4623 17.8538 12.5319 17.7839L17.0319 13.2839C17.1728 13.1431 17.2519 12.9521 17.2519 12.7529C17.2519 12.5538 17.1728 12.3628 17.0319 12.2219C16.8911 12.0811 16.7001 12.002 16.5009 12.002C16.3018 12.002 16.1108 12.0811 15.9699 12.2219L12.7509 15.4424V2.25293C12.7509 2.05402 12.6719 1.86325 12.5313 1.7226C12.3906 1.58195 12.1999 1.50293 12.0009 1.50293C11.802 1.50293 11.6113 1.58195 11.4706 1.7226C11.33 1.86325 11.2509 2.05402 11.2509 2.25293V15.4424L8.03195 12.2219C7.89112 12.0811 7.70011 12.002 7.50095 12.002C7.30178 12.002 7.11078 12.0811 6.96995 12.2219C6.82912 12.3628 6.75 12.5538 6.75 12.7529C6.75 12.9521 6.82912 13.1431 6.96995 13.2839L11.4699 17.7839Z"
                                  fill="white"/>
                        </svg>
                        <p>Скачать каталог</p>
                    </a>
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
                <div class="download_catalog download_catalog--mobile">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M0.75 14.8545C0.948912 14.8545 1.13968 14.9335 1.28033 15.0742C1.42098 15.2148 1.5 15.4056 1.5 15.6045V19.3545C1.5 19.7523 1.65804 20.1338 1.93934 20.4152C2.22064 20.6965 2.60218 20.8545 3 20.8545H21C21.3978 20.8545 21.7794 20.6965 22.0607 20.4152C22.342 20.1338 22.5 19.7523 22.5 19.3545V15.6045C22.5 15.4056 22.579 15.2148 22.7197 15.0742C22.8603 14.9335 23.0511 14.8545 23.25 14.8545C23.4489 14.8545 23.6397 14.9335 23.7803 15.0742C23.921 15.2148 24 15.4056 24 15.6045V19.3545C24 20.1501 23.6839 20.9132 23.1213 21.4758C22.5587 22.0384 21.7956 22.3545 21 22.3545H3C2.20435 22.3545 1.44129 22.0384 0.87868 21.4758C0.316071 20.9132 0 20.1501 0 19.3545V15.6045C0 15.4056 0.0790176 15.2148 0.21967 15.0742C0.360322 14.9335 0.551088 14.8545 0.75 14.8545Z"
                                  fill="white"/>
                            <path d="M11.4699 17.7839C11.5396 17.8538 11.6224 17.9092 11.7135 17.947C11.8046 17.9848 11.9023 18.0043 12.0009 18.0043C12.0996 18.0043 12.1973 17.9848 12.2884 17.947C12.3795 17.9092 12.4623 17.8538 12.5319 17.7839L17.0319 13.2839C17.1728 13.1431 17.2519 12.9521 17.2519 12.7529C17.2519 12.5538 17.1728 12.3628 17.0319 12.2219C16.8911 12.0811 16.7001 12.002 16.5009 12.002C16.3018 12.002 16.1108 12.0811 15.9699 12.2219L12.7509 15.4424V2.25293C12.7509 2.05402 12.6719 1.86325 12.5313 1.7226C12.3906 1.58195 12.1999 1.50293 12.0009 1.50293C11.802 1.50293 11.6113 1.58195 11.4706 1.7226C11.33 1.86325 11.2509 2.05402 11.2509 2.25293V15.4424L8.03195 12.2219C7.89112 12.0811 7.70011 12.002 7.50095 12.002C7.30178 12.002 7.11078 12.0811 6.96995 12.2219C6.82912 12.3628 6.75 12.5538 6.75 12.7529C6.75 12.9521 6.82912 13.1431 6.96995 13.2839L11.4699 17.7839Z"
                                  fill="white"/>
                        </svg>
                        <p>Скачать каталог</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="prev_direction">
            <h2>Коллекции</h2>
            <div class="prev_directions__forms">
                <div class="prev_directions__form">
                    <img src="{{asset('/elitvid_assets/imgs/benches/collections/verona/main_verona.png')}}" alt="">
                    <div class="prev_directions_form--text">
                        <div class="text--description">
                            <h4>Verona</h4>
                            <p>Коллекция с потрясающими природными формами, гармонично впишется в любой ландшафт.</p>
                        </div>
                        <div class="lines-decor">
                            <div class="vertical-line"></div>
                            <div class="horizontal-line"></div>
                        </div>
                    </div>
                    <a href="{{route('verona_benches')}}">
                        <button class="look-collection">Смотреть коллекцию</button>
                    </a>
                </div>
                <div class="prev_directions__form">
                    <img src="{{asset('/elitvid_assets/imgs/benches/collections/stones/main_stones.png')}}" alt="">
                    <div class="prev_directions_form--text">
                        <div class="text--description">
                            <h4>Stones</h4>
                            <p>Идеальна для создания стильных пространств возле офисов и в парковых зонах.</p>
                        </div>
                        <div class="lines-decor">
                            <div class="vertical-line"></div>
                            <div class="horizontal-line"></div>
                        </div>
                    </div>
                    <a href="{{route('stones_benches')}}">
                        <button class="look-collection">Смотреть коллекцию</button>
                    </a>
                </div>
                <div class="prev_directions__form">
                    <img src="{{asset('/elitvid_assets/imgs/benches/collections/lines/main_lines.png')}}" alt="">
                    <div class="prev_directions_form--text">
                        <div class="text--description">
                            <h4>lines</h4>
                            <p>Подходят для создания различных композиций в торговых центрах и на улице.</p>
                        </div>
                        <div class="lines-decor">
                            <div class="vertical-line"></div>
                            <div class="horizontal-line"></div>
                        </div>
                    </div>
                    <a href="{{route('lines_benches')}}">
                        <button class="look-collection">Смотреть коллекцию</button>
                    </a>
                </div>
                <div class="prev_directions__form">
                    <img src="{{asset('/elitvid_assets/imgs/benches/collections/solo/main_solo.png')}}" alt="">
                    <div class="prev_directions_form--text">
                        <div class="text--description">
                            <h4>Solo</h4>
                            <p>Подойдёт для торговых центров, стильно впишется в любой дизайн-проект.</p>
                        </div>
                        <div class="lines-decor">
                            <div class="vertical-line"></div>
                            <div class="horizontal-line"></div>
                        </div>
                    </div>
                    <a href="{{route('solo_benches')}}">
                        <button class="look-collection">Смотреть коллекцию</button>
                    </a>
                </div>
                <div class="prev_directions__form">
                    <img src="{{asset('/elitvid_assets/imgs/benches/collections/street_furniture/main_street_furniture.png')}}" alt="">
                    <div class="prev_directions_form--text">
                        <div class="text--description">
                            <h4>Street furniture</h4>
                            <p>Удобна для детских площадок и аллей. Прекрасно впишется
                                в ваш уютный двор.</p>
                        </div>
                        <div class="lines-decor">
                            <div class="vertical-line"></div>
                            <div class="horizontal-line"></div>
                        </div>
                    </div>
                    <a href="{{route('street_furniture_benches')}}">
                        <button class="look-collection">Смотреть коллекцию</button>
                    </a>
                </div>
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
