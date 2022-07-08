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
                <a class="nav__link active" href="{{route('trainers')}}">Тренери</a>
                <a class="nav__link" href="{{route('about_us')}}">Про нас</a>
                <a class="nav__link" href="{{route('contacts')}}">Контакти</a>
            </nav>

            <div class="time">
                Пн - Пт   6:00 - 22:00<br>Сб - Нд   7:00 - 21:00
            </div>

        </div>
    </div>
</header>

<div class="intro__trainers intro">
    <div class="container">
        <div class="abonement__inner">
            <h1 class="intro__title">Наші тренери</h1>
            <h2 class="intro__subtitle">Ваш особистий тренер - запорука успіху. Усі наші тренери -<br> майстри
                своєї справи, що допоможуть вам у досягненні<br> поставленої мети.  </h2>
        </div>
    </div>
</div>

@include('partials.buttons')

<div class="professionals">
    <div class="container">
        <div class="professionals__inner">
            <div class="trainers__title">Команда професіоналів</div>
            <div class="professionals__tiles">
                <div class="professionals__item">
                    <img src="{{asset('./images/kate.jpg')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Катерина Сомська</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/victor.jpg')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Віктор Безух</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/alex.jpg')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Олексій Захаров</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/july.jpg')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Юлія Савчук</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/nataly.jpg')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Наталія Боженко</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/maria.jpg')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Марія Старшко</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/james.png')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Джеймс Сандерленд</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/rocky.jpg')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Рокі Палачев</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/Screenshot_1.png')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Клара Сабурова</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/Screenshot_3.png')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Данило Данковський</div>
                </div>
                <div class="professionals__item">
                    <img src="{{asset('./images/Screenshot_2.png')}}" alt="" style="width: 360px; height: auto">
                    <div class="names">Артем Бурах</div>
                </div>
                <div class="professionals__item set">
                    <div class="other__title" style="color:white">Потрібна допомога у виборі тренера?</div>
                    <div class="other__text">Залиште заявку, і ми зателефонуємо вам,<br> щоб допомогти з вибором.</div>
                    <form action="{{route('trainers-form')}}" method="post">
                        @csrf
                        <div class="questions__form">
                            <label for="name"></label>
                            <input type="text" name="name" placeholder="Ім'я">
                            <label for="phone"></label>
                            <input type="text" name="phone" placeholder="Номер телефону">
                        </div>
                        <button type="submit" class="button questions__button">Надіслати заявку</button>
                    </form>
                </div>
                </div>
            </div>

        </div>
    </div>


@include('partials.footer')

</body>

</html>
