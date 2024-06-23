<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(90164998, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/90164998" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <link rel="stylesheet" href="{{asset('/elitvid_assets/reset.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!--    <link rel="stylesheet" href="newDesign/newDesign/dist/style.css">-->
    <link rel="stylesheet" href="{{asset('/elitvid_assets/style.css')}}">
    <link rel="shortcut icon" href="{{asset('/elitvid_assets/imgs/logo/logo.svg')}}">

    <title>Elitvid</title>
</head>
<body>
<header>
    <div class="header--section">
        <div class="logo"><a href="{{route('home')}}"><img class="logo-img" src="{{asset('/elitvid_assets/imgs/logo/logo.svg')}}" alt="Логотип Элитвид"></a></div>
        <nav class="header-menu">
            <ul class="header-menu--list menu">
                <li><a href="{{route('directions')}}">Наши направления</a></li>
                <li>
                    <button class="call">Заказать звонок</button>
                </li>
                <li><a href="tel:375297034014" class="phone-number">+375 (29) 703 40 14</a></li>
                <li><a href="tel:375297665012" class="phone-number">+375 (29) 766-50-12</a></li>
            </ul>
        </nav>
        <button class="header__burger" id="burger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
@yield('content')
<footer>
    <div class="footer-section">
        <div class="logo-column">
            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{asset('/elitvid_assets/imgs/logo/logo-big.svg')}}" alt="Логотип Элитвид" class="big-logo-img">
                </a>
            </div>
            <div class="mobile-tagline-button">
                <div class="tagline">
                    <p>Воплотим ваши идеи в реальность!</p>
                </div>
                <div class="request-phone">
                    <button class="request-phone--button call1">
                        Заказать звонок
                    </button>
                </div>
            </div>
        </div>
        <div class="information-column">
            <div class="contacts">
                <div class="contacts-text">
                    <h4>Контакты</h4>
                    <ul class="contacts-text--list">
                        <li>Пн-пт: 8.00-17.00</li>
                        <li>el_vid@mail.ru</li>
                        <li><a href="tel:375297034014" class="phone-number">+375 (29) 703 40 14</a></li>
                        <li><a href="tel:375297665012" class="phone-number">+375 (29) 766 50 12</a></li>
                        <li><a href="tel:375297665012" class="phone-number">+375 (29) 350 71 71</a></li>
                    </ul>
                </div>
                <div class="contacts-icons">
                    <a href="">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="&#208;&#151;&#208;&#189;&#208;&#176;&#209;&#135;&#208;&#186;&#208;&#184; &#209;&#129;&#208;&#190;&#209;&#134; &#209;&#129;&#208;&#181;&#209;&#130;&#208;&#181;&#208;&#185;">
                                <path id="Vector"
                                      d="M30.5988 1.79688H5.39883C3.41883 1.79688 1.79883 3.41688 1.79883 5.39688V30.5969C1.79883 32.5787 3.41883 34.1969 5.39883 34.1969H30.5988C32.5788 34.1969 34.1988 32.5787 34.1988 30.5969V5.39688C34.1988 3.41688 32.5788 1.79688 30.5988 1.79688ZM17.97 27.9383C20.614 27.9378 23.1495 26.8872 25.0189 25.0174C26.8882 23.1477 27.9384 20.612 27.9384 17.9681C27.9384 17.3597 27.861 16.7729 27.753 16.1969H30.5988V29.1857C30.5988 29.3492 30.5665 29.5112 30.5038 29.6622C30.441 29.8133 30.3491 29.9504 30.2331 30.0658C30.1172 30.1812 29.9797 30.2726 29.8284 30.3347C29.6771 30.3968 29.515 30.4284 29.3514 30.4277H6.64623C6.48267 30.4284 6.32059 30.3968 6.16928 30.3347C6.01797 30.2726 5.88041 30.1812 5.76451 30.0658C5.64861 29.9504 5.55664 29.8133 5.49388 29.6622C5.43113 29.5112 5.39883 29.3492 5.39883 29.1857V16.1969H8.18703C8.07723 16.7729 7.99983 17.3597 7.99983 17.9681C8.00031 20.6122 9.05089 23.1479 10.9206 25.0175C12.7902 26.8872 15.3259 27.9378 17.97 27.9383ZM11.7402 17.9681C11.7402 17.15 11.9014 16.3399 12.2144 15.584C12.5275 14.8282 12.9864 14.1414 13.5649 13.5629C14.1434 12.9845 14.8302 12.5256 15.586 12.2125C16.3418 11.8994 17.1519 11.7383 17.97 11.7383C18.7881 11.7383 19.5982 11.8994 20.3541 12.2125C21.1099 12.5256 21.7967 12.9845 22.3752 13.5629C22.9537 14.1414 23.4125 14.8282 23.7256 15.584C24.0387 16.3399 24.1998 17.15 24.1998 17.9681C24.1998 19.6203 23.5435 21.2049 22.3752 22.3732C21.2068 23.5415 19.6223 24.1979 17.97 24.1979C16.3178 24.1979 14.7332 23.5415 13.5649 22.3732C12.3966 21.2049 11.7402 19.6203 11.7402 17.9681ZM29.3514 10.7969H26.4444C26.1144 10.7959 25.7981 10.6644 25.5647 10.431C25.3313 10.1976 25.1998 9.88134 25.1988 9.55128V6.64068C25.1988 5.95307 25.7568 5.39688 26.4426 5.39688H29.3496C30.0408 5.39688 30.5988 5.95307 30.5988 6.64068V9.54948C30.5988 10.2353 30.0408 10.7969 29.3514 10.7969Z"
                                      fill="#7F7F7F"/>
                            </g>
                        </svg>
                    </a>
                    <a href="">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="&#208;&#151;&#208;&#189;&#208;&#176;&#209;&#135;&#208;&#186;&#208;&#184; &#209;&#129;&#208;&#190;&#209;&#134; &#209;&#129;&#208;&#181;&#209;&#130;&#208;&#181;&#208;&#185;">
                                <path id="Vector"
                                      d="M30.5988 1.79688H5.39883C3.41883 1.79688 1.79883 3.41688 1.79883 5.39688V30.5969C1.79883 32.5787 3.41883 34.1969 5.39883 34.1969H17.9988V21.5969H14.3988V17.1419H17.9988V13.4519C17.9988 9.55667 20.1804 6.82067 24.7776 6.82067L28.023 6.82428V11.5133H25.8684C24.0792 11.5133 23.3988 12.8561 23.3988 14.1017V17.1437H28.0212L26.9988 21.5969H23.3988V34.1969H30.5988C32.5788 34.1969 34.1988 32.5787 34.1988 30.5969V5.39688C34.1988 3.41688 32.5788 1.79688 30.5988 1.79688Z"
                                      fill="#7F7F7F"/>
                            </g>
                        </svg>
                    </a>
                    <a href="">
                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="&#208;&#151;&#208;&#189;&#208;&#176;&#209;&#135;&#208;&#186;&#208;&#184; &#209;&#129;&#208;&#190;&#209;&#134; &#209;&#129;&#208;&#181;&#209;&#130;&#208;&#181;&#208;&#185;">
                                <path id="Vector"
                                      d="M34.1988 30.5969V5.39688C34.1988 3.41688 32.5734 1.79688 30.5898 1.79688H5.40783C3.33783 1.79688 1.79883 3.33228 1.79883 5.39688V30.5969C1.79883 32.6633 3.33783 34.1969 5.40783 34.1969H30.5898C31.545 34.1955 32.4608 33.816 33.137 33.1414C33.8133 32.4669 34.195 31.552 34.1988 30.5969ZM27.33 20.8895C27.33 20.8895 29.3676 22.9001 29.8698 23.8325C29.8842 23.8523 29.8896 23.8703 29.895 23.8775C30.0984 24.2195 30.1506 24.4895 30.048 24.6875C29.8788 25.0169 29.3028 25.1825 29.1066 25.1969H25.5084C25.2564 25.1969 24.7344 25.1321 24.1008 24.6947C23.6148 24.3563 23.1342 23.7965 22.6662 23.2511C21.9678 22.4411 21.363 21.7391 20.7546 21.7391C20.6774 21.7389 20.6008 21.7517 20.5278 21.7769C20.0652 21.9245 19.4784 22.5815 19.4784 24.3365C19.4784 24.8855 19.0464 25.1987 18.7404 25.1987H17.0916C16.53 25.1987 13.605 25.0025 11.0148 22.2683C7.83603 18.9203 4.98123 12.2045 4.95603 12.1451C4.77603 11.7113 5.14863 11.4755 5.55363 11.4755H9.18963C9.67743 11.4755 9.83403 11.7707 9.94563 12.0353C10.0716 12.3359 10.5468 13.5491 11.3244 14.9135C12.5898 17.1329 13.3692 18.0365 13.9902 18.0365C14.1063 18.0358 14.2204 18.0055 14.3214 17.9483C15.1332 17.5001 14.982 14.6057 14.946 14.0081C14.946 13.8947 14.9442 12.7139 14.5302 12.1469C14.2314 11.7365 13.7256 11.5799 13.4196 11.5205C13.5444 11.3485 13.7086 11.209 13.8984 11.1137C14.4546 10.8365 15.4572 10.7969 16.4544 10.7969H17.0088C18.0906 10.8113 18.3714 10.8815 18.762 10.9805C19.5522 11.1695 19.5684 11.6825 19.4982 13.4285C19.4784 13.9253 19.4568 14.4887 19.4568 15.1493C19.4568 15.2915 19.4514 15.4481 19.4514 15.6101C19.4262 16.5029 19.3974 17.5127 20.0274 17.9267C20.109 17.9777 20.203 18.0051 20.2992 18.0059C20.5188 18.0059 21.1758 18.0059 22.956 14.9513C23.739 13.6031 24.342 12.0119 24.3834 11.8931C24.4463 11.7646 24.5374 11.652 24.6498 11.5637C24.742 11.5158 24.8447 11.4917 24.9486 11.4935H29.2236C29.6916 11.4935 30.0084 11.5637 30.0678 11.7419C30.1704 12.0281 30.048 12.9011 28.095 15.5399L27.2256 16.6919C25.4544 19.0103 25.4544 19.1291 27.33 20.8895Z"
                                      fill="#7F7F7F"/>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="catalog">
                <div class="catalog-text">
                    <h4>Каталог</h4>
                    <nav class="footer-menu">
                        <ul class="catalog-text--list menu">
                            <li><a href="">Кашпо</a></li>
                            <li><a href="">Скамьи</a></li>
                            <li><a href="">Ротонды и коллонады</a></li>
                            <li><a href="">Парклет, навесы</a></li>
                            <li><a href="">Болларды и ограждения</a></li>
                            <li><a href="">Столбы и накрывки</a></li>
                            <li><a href="">Фасадная лепнина и панели</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://www.google.com/recaptcha/api.js?render={{config('services.recaptcha.site_key')}}"></script>
<script>
    function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function () {
            grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'send_mail'}).then(function (token) {
                document.getElementById('g-recaptcha-response').value = token;
                document.getElementById('mail_form').submit();
            });
        });
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script defer src="{{asset('/elitvid_assets/js/sliders/main_slider.js')}}"></script>
<script defer src="{{asset('/elitvid_assets/js/popupSubmitApplication.js')}}"></script>
<script defer src="{{asset('/elitvid_assets/js/popupRequestCall.js')}}"></script>
<script defer src="{{asset('/elitvid_assets/js/burgerMenu.js')}}"></script>
<script defer src="{{asset('/elitvid_assets/js/test.js')}}"></script>

</body>
</html>




