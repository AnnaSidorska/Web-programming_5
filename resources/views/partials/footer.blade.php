<footer class="footer">
  <div class="container">
    <div class="footer__items">
      <div class="footer__logos">
        <div class="header__logo">
          <img class="logo__icon" src="{{asset('./images/gym.png')}}" alt="" style="width: 50px; height: auto; transform: rotate(44.37deg)">
    Sport<span class="logo_col">Club</span>
        </div>
        <div class="footer__text">© Copyright 2020 - 2022<br>All Rights Reserved</div>
        <div class="icons">
          <img class="images" src={{asset('./images/insta.png')}} alt="" style="width: 50px; height: auto" alt="">
<img class="images" src={{asset('./images/telegram.png')}} alt="" style="width: 50px; height: auto" alt="">
<img class="images" src={{asset('./images/facebook.png')}} alt="" style="width: 50px; height: auto" alt="">
</div>

</div>

<div class="footer__info">
    <div class="footer__title_text">Адреса клубу</div>
    <div class="footer__text">
        вул. Академіка Янгеля, 5<br>
        м. Київ<br>
        03056
    </div>

    <div class="footer__title_text">Контакти</div>
    <div class="footer__text">
        E-mail: sportclub@club.com<br>
        Тел: 050 555 55 55
    </div>
</div>

<div class="footer__time">
    <div class="footer__title_text">Графік роботи</div>
    <div class="footer__text">
        Пн - Пт    6:00 - 22:00 <br> Сб - Нд    7:00 - 21:00
    </div>
</div>

<nav class="footer__navigation">
    <a class="footer__link" href="{{route('index')}}">Головна</a>
    <a class="footer__link" href="{{route('subscription')}}">Абонементи</a>
    <a class="footer__link" href="{{route('trainers')}}">Тренери</a>
    <a class="footer__link" href="{{route('about_us')}}">Про нас</a>
    <a class="footer__link" href="{{route('contacts')}}">Контакти</a>
</nav>
    </div>
  </div>
</footer>
