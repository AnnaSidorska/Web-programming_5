<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('./css/style.css')}}">
    <link rel="stylesheet" href="{{asset('./css/bootstrap-grid.min.css')}}">
    <link href="https://fonts.google.com/specimen/Open+Sans"
          rel="stylesheet">
    <Title>SportClub</Title>
    <style>
        html, body {
            padding: 0;
            margin: 0;
        }

        /*Контейнер*/
        .container {
            width: 100%;
            max-width: 1220px;
            margin: 0 auto;
            background: none;
        }

        .content .row div{
            background: #0dcaf0;
            border: 1px solid;
        }
    </style>
</head>
<body>

<header class="header">
    <div class="container">
        <div class="header__upline">
            <div class="header__section section1">
                <img class="icon" src="{{asset('./images/marker.png')}}" alt="" style="height: 19px; width: auto">
                <div class="header__place">Київ</div>
            </div>

            <div class="header__section section2">
                <img class="icon" src={{asset('./images/phone-call.png')}} alt="" style="width: 24px; height: 24px" alt="">
                <div class="header__phone">050 555 55 55</div>
            </div>
        </div>

        <div class="header__inner">
            <div class="header__logo">
                <img class="logo__icon" src="{{asset('./images/gym.png')}}" alt="" style="width: 50px; height: auto; transform: rotate(44.37deg)">
                Sport<span class="logo_col">Club</span>
            </div>

            <nav class="nav">
                <a class="nav__link" href="{{route('index')}}">Головна</a>
                <a class="nav__link" href="{{route('subscription')}}">Абонементи</a>
                <a class="nav__link" href="{{route('trainers')}}">Тренери</a>
                <a class="nav__link" href="{{route('about_us')}}">Про нас</a>
                <a class="nav__link active" href="{{route('contacts')}}">Контакти</a>
            </nav>

            <div class="time">
                Пн - Пт   6:00 - 22:00<br>Сб - Нд   7:00 - 21:00
            </div>

        </div>
    </div>
</header>

<div class="intro__contacts intro">
    <div class="container">
        <div class="abonement__inner">
            <h1 class="intro__title">Контакти</h1>
            <h2 class="intro__subtitle">Зв’яжіться з нами за будь-яких питань. Ми відкриті до будь-яких ваших питань.</h2>

            <a class="call__button button" href="#">Зателефонувати нам</a>
        </div>
    </div>
</div>

<div class="contacts__block">
    <div class="container">
        <div class="contacts__tiles">
            <div class="contacts__item">
                <img src="{{asset('./images/phone2.png')}}" alt="" style="width: 50px; height: auto">
                <div class="citem__title">Наш телефон</div>
                +380 50 555 55 55
            </div>
            <div class="contacts__item">
                <img src="{{asset('./images/email2.png')}}" alt="" style="width: 50px; height: auto">
                <div class="citem__title">Email</div>
                sportclub@club.com
            </div>
            <div class="contacts__item">
                <img src="{{asset('./images/marker2.png')}}" alt="" style="width: 50px; height: auto">
                <div class="citem__title">Адреса</div>
                вул. Академіка Янгеля, 5<br>
                м. Київ
            </div>
        </div>
    </div>
</div>

<div class="questions">
    <div class="container">
        <div class="questions__items">
            <div class="que__item">
                Залишилися питання?
                <p>Потребуєте допомоги у виборі? Наш менеджер допоможе<br> знайти відповіді на кожне ваше питання</p>

                <form action="/contacts/submit" method="post">
                    @csrf
                    <div class="intro__form">
                        <label for="name"></label>
                        <input type="text" name="name" placeholder="Ім'я">
                        <label for="phone"></label>
                        <input type="text" name="phone" placeholder="Номер телефону">
                        <label for="email"></label>
                        <input type="text" name="email" placeholder="Електрона пошта">
                    </div>
                    <button type="submit" class="button">Отримати допомогу</button>
                </form>

            </div>
            <div class="que__item">
                <img src="{{asset('./images/img3.jpg')}}" alt="">
            </div>
        </div>

    </div>
</div>

<div class="social">
    <div class="container">
        <div class="social__inner">
            <div class="social__title">СТЕЖТЕ ЗА НАМИ У СОЦІАЛЬНИХ МЕРЕЖАХ</div>
            <div class="social__icons">
                <a href="#"><img src="{{asset('./images/facebook.png')}}" alt="" style="width: 50px; height: auto"></a>
                <a href="#"><img src="{{asset('./images/insta.png')}}" alt="" style="width: 50px; height: auto"></a>
                <a href="#"><img src="{{asset('./images/telegram.png')}}" alt="" style="width: 50px; height: auto"></a>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')

</body>

</html>
