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
        <a class="nav__link active" href="{{route('index')}}">Головна</a>
        <a class="nav__link" href="{{route('subscription')}}">Абонементи</a>
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

<div class="intro">
  <div class="container">
    <div class="intro__inner">
      <div class="intro__title">Перше тренування в SportClub безкоштовно</div>
      <div class="intro__subtitle">Йдеш у спортзал вперше? Не знаєш, з чого почати?<br>
        Пропонуємо спробувати з першого безкоштовного тренування з найкращими тренерами Києва.</div>

        <form action="{{route('index-form')}}" method="post">
           @csrf
            <div class="intro__form">
                <label for="name"></label>
                <input type="text" name="name" placeholder="Ім'я">
                <label for="phone"></label>
                <input type="text" name="phone" placeholder="Номер телефону">
            </div>
            <button type="submit" class="button">Записатися на тренування</button>
        </form>

    </div>
  </div>
</div>

@include('partials.buttons')

<div class="trainers">
  <div class="container">
    <h2 class="trainers__title">Тренери</h2>
    <div class="trainer__table">
      <div class="trainer__item">
        <div class="trainer__img">
          <img src="{{asset('./images/1.jpg')}}" alt="">
        </div>
        <p>Данило Данковський</p>
        <h3>Старший інструктор тренажерного залу, топтренер</h3>
        <div class="trainer__phone">
          <img class="trainer__icon" src={{asset('./images/phone.png')}} alt="" style="width: 24px" alt="">
          <p>093 93 93 933</p>
        </div>
        <ul  class="trainer__description">
          <li>Кандидат в майстри спорту з джиу-джитсу
          <li>Кандидат в майстри спорту з панкратіону
        </ul>
      </div>

      <div class="trainer__item">
        <div class="trainer__img">
          <img src="{{asset('./images/Screenshot_1.png')}}" alt="">
        </div>
        <p>Клара Сабурова</p>
        <h3>Тренер тренажерного залу, інструктор групових програм</h3>
        <div class="trainer__phone">
          <img class="trainer__icon" src={{asset('./images/phone.png')}} alt="" style="width: 24px" alt="">
          <p>097 97 97 977</p>
        </div>
        <ul  class="trainer__description">
          <li>Майстер спорту з важкої атлетики
        </ul>

      </div>

      <div class="trainer__item">
        <div class="trainer__img">
          <img src="{{asset('./images/Screenshot_2.png')}}" alt="">
        </div>
        <p>Артем Бурах</p>
        <h3>Інструктор тренажерного залу, <br>топтренер</h3>
        <div class="trainer__phone">
          <img class="trainer__icon" src={{asset('./images/phone.png')}} alt="" style="width: 24px" alt="">
          <p>098 98 98 988</p>
        </div>
        <ul  class="trainer__description">
          <li>Чемпіон Європи з боксу у важкій ваговій категорії
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="block4">
  <div class="container">
    Приводь себе у форму разом з нами
  </div>
</div>

<div class="block5">
  <div class="container">
    <div class="block5__table">

      <div class="table__item">
        <div class="block__title">Тренажерний зал</div>
        <ul class="block__text">
          <li> Якісне обладнання INTERATLETIKA </li>
          <li> Велика кардіо-зона </li>
          <li> Тренажерний зал площею 350 кв.м.</li>
          <li> Можливість вибору абонементу на будь-який смак </li>
          <li> Професійна команда тренерів </li>
          <li> Високий рівень сервісу </li>
          <li> Індивідуальний підхід до кожного клієнта </li>
        </ul>
      </div>

      <div class="table__item table__center">
        <div class="block__suptitle">
          <img src="{{asset('./images/star.png')}}" alt="" style="width: 30px; height:30px">
          ЕСКЛЮЗИВ
        </div>
        <div class="block__title">EMS-ТРЕНУВАННЯ</div>
        <ul class="block__text text__center">
          <li>Методики тренувань побудовані на використанні EMS-тренажера,
            в основі роботи якого закладено принцип електро-м’язової стимуляції.</li>
          <li>Завдяки EMS, під час тренування задіюється до 90% м’язових волокон,
            що недосяжно при звичайному тренінгу!</li>
        </ul>
      </div>

      <div class="table__item">
        <div class="block__title">Тренажерний зал</div>
        <ul class="block__text">
          <li>Персональний тренінг є найефективнішим способом у досягненні ваших спортивних цілей.</li>
          <li>Наші інструктори мають величезний досвід роботи, тож допоможуть отримати максимум результату
            від тренувань, враховуючи ваш спортивний рівень, стан здоров’я і побажання. </li>
        </ul>
      </div>
    </div>
  </div>
</div>

    @include('partials.footer')
</body>

</html>
