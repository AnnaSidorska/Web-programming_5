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
                <a class="nav__link active" href="{{route('subscription')}}">Абонементи</a>
                <a class="nav__link" href="{{route('trainers')}}">Тренери</a>
                <a class="nav__link" href="{{route('about_us')}}">Про нас</a>
                <a class="nav__link" href="{{route('contacts')}}">Контакти</a>
            </nav>

            <div class="time">
                Пн - Пт   6:00 - 22:00<br>Сб - Нд   7:00 - 21:00
            </div>

        </div>
    </div>
</header>

<div class="intro__abonement intro">
    <div class="container">
        <div class="abonement__inner">
            <div class="intro__title">Абонементи в SportClub</div>
            <div class="intro__subtitle">Ваша іменна клубна карта відкриває доступ до всіх зон клубу<br>
                та розширює можливості для різноманітних тренувань щодня.</div>

            <a class="button" href="#">Придбати абонемент</a>
        </div>
    </div>
</div>

<div class="block_gym">
    <div class="container">
        <div class="gym__title">Тренажерний зал</div>
        <div class="block_gym__items">
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB MORNING</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу в ранкові години.</div>
                    <div class="main__time">
                        Будні: 6:00 до 12:00<br>
                        Вихідні: 7:00 до 13:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">1200₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="{{asset('./images/angle_gray.png')}}" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>

            </div>
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB DAY</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу в денні години.</div>
                    <div class="main__time">
                        Будні: 12:00 до 18:00<br>
                        Вихідні: 13:00 до 18:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">1100₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="{{asset('./images/angle_gray.png')}}" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB EVENING</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу у вечірні години.</div>
                    <div class="main__time">
                        Будні: 17:00 до 22:00<br>
                        Вихідні: 17:00 до 13:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">1400₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="{{asset('./images/angle_gray.png')}}'" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB full</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу без часових обмежень.</div>
                    <div class="main__time">
                        Будні: 6:00 до 22:00<br>
                        Вихідні: 7:00 до 21:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">1800₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="{{asset('./images/angle_gray.png')}}" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tile__item">
                <div class="tile__title">SPORTCLUB ultra</div>
                <div class="main__block">
                    <div class="main__text">Відвідування залу в ранкові години.</div>
                    <div class="main__time">
                        Будні: 6:00 до 22:00<br>
                        Вихідні: 7:00 до 21:00
                    </div>
                    <div class="total">Разом на місяць</div>
                    <div class="price">2500₴</div>
                    <div class="buttons">
                        <div class="container">
                            <a class="main__button button" href="#">Придбати</a>
                            <a class="more__button" href="#">Дізнатися більше
                                <img src="{{asset('./images/angle_gray.png')}}" alt="" style="height: 15px; width: auto;"> </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="tile__item other_tile">
                <div class="other__title">Виникли труднощі з вибором абонементу?</div>
                <div class="other__text">Залиште заявку, і ми зателефонуємо вам,<br> щоб допомогти з вибором.</div>
                <form action="/subscription/submit" method="post">
                    @csrf
                    <div class="questions__form">
                        <label for="name"></label><input type="text" id="name" placeholder="Ім'я">
                        <label for="phone"></label><input type="text" id="phone" placeholder="Номер телефону">
                    </div>
                    <a class="button questions__button" href="/subscription/submit">Надіслати заявку</a>
                </form>


            </div>
        </div>
    </div>
</div>

<div class="block__about intro">
    <div class="container">
        <div class="about__inner">
            <div class="about__items">
                <div class="about__titles">Абонемент включає в себе:</div>
                <ol style="list-style-image: url({{asset('./images/anglea.png')}}">
                    <li>Тренажерний і кардіо зали</li>
                    <li>Йога, пілатес</li>
                    <li>Функціональний тренінг</li>
                    <li>EMS-тренування</li>
                    <li>Бокс, єдиноборства</li>
                    <li>Басейн</li>
                    <li>Заморозка абонемента</li>
                </ol>
            </div>
            <div class="about__items">
                <div class="about__titles">Додаткові послуги:</div>
                <ol style="list-style-image: url({{asset('./images/anglea.png')}})">
                    <li>Персональні тренування</li>
                    <li>Всі види масажу</li>
                    <li>Фітнес бар</li>
                    <li>Сауна</li>
                    <li>Оренда шафки</li>
                    <li>Іменний халат</li>
                </ol>
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
                <form action="/subscription/submit1" method="post">
                    @csrf
                    <div class="intro__form">
                        <label for="name"></label><input type="text" id="name2" placeholder="Ім'я">
                        <label for="phone"></label><input type="text" id="phone2" placeholder="Номер телефону">
                        <label for="email"></label><input type="text" id="email" placeholder="Електрона пошта">
                    </div>
                    <a class="button" href="/subscription/submit1">Отримати допомогу</a>
                </form>

            </div>
            <div class="que__item">
                <img src="{{asset('./images/img3.jpg')}}" alt="">
            </div>
        </div>

    </div>
</div>

@include('partials.footer')

</body>

</html>
