<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Windows 10, Windows 7, Windows 8, Windows XP, Windows Vista, Soft for Windows">
    <meta name="content" content="Обзоры, тестирование ПО для вашей Windows найдется на нашем сайте">
    <meta name="author" content="Вячеслав Ширнин"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{asset('assets/img/logo-windows.ico')}}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
    <link rel="stylesheet" href="{{asset('assets/user/css/user.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
          integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
          crossorigin="anonymous"/>

    <title>@yield('title')</title>

</head>
<body>
<form class="modal fade" id="order_form" tabindex="-1" role="dialog" aria-labelledby="order_formLabel"
      aria-hidden="true">
    <div class="modal-dialog" style="max-width: 410px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="order_formLabel">Подписка на новости</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-3">
                    <label>Оставьте Ваши данные для рассылки</label>
                </div>
                <div class="mb-3">
                    <input type="text" id="name" name="p1" required placeholder="Ваше имя" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="email" id="email" name="p3" placeholder="Электронная почта" class="form-control">
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label class="mb-0" style="font-size: 13px;">
                            <input type="checkbox" name="check[]" id="check" class="check" checked required> Я даю свое
                            согласие на обработку персональных данных
                        </label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Подписаться</button>
                <button type="reset" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</form>
<form class="form modal fade" id="formModal2" tabindex="-1" role="dialog" aria-labelledby="formModal2Label"
      aria-hidden="true">
    <div class="modal-dialog" style="max-width: 410px;">
        <div class="modal-content">
            <div class="modal-header">
                <p class="h6 modal-title txt-blue text-uppercase" id="formModal2Label">Ваша заявка отправлена</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Проверьте свою почту и подтвердите заявку.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</form>

<nav class="container navbar navbar-expand-lg navbar-light sticky-top"
     style="border-radius: 0 0 10px 10px; background-color: #f0f8ff;">
    <a class="navbar-brand" href="{{route('home')}}">
        <img width="45" height="45" alt="Windows-icon" src="{{asset('assets/img/logo-windows.ico')}}">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-menu mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">Главная</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./html/tops.html">Топы</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle @if(Request::is('product/*')) active @endif" href=".html/category" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Категории</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./html/archivators.html">Архиваторы</a>
                    <a class="dropdown-item" href="./html/antivirus.html">Антивирусы</a>
                    <a class="dropdown-item" href="./html/browsers.html">Браузеры</a>
                    <a class="dropdown-item" href="./html/utils.html">Утилиты</a>
                    <a class="dropdown-item" href="./html/office.html">Офисное ПО</a>
                    <a class="dropdown-item" href="./html/graphics.html">Графика</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav">
                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#order_form">
                    Подписаться на новости
                </button>
                <input class="form-control mt-2 mb-2 ml-0 mr-0 mt-lg-0 mb-lg-0 ml-lg-2 mr-lg-2" type="search"
                       placeholder="Поискать по сайту" aria-label="Search">
                <button class="btn btn-outline-success my-sm-0" type="submit">Поиск</button>
            </ul>
        </form>
    </div>
</nav>

<div class="container">
    @yield('header')

    @yield('content')
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 mr-auto">
                <p>
                    <i class="fas fa-phone-alt"></i> Телефон:
                    <a href="tel:8-950-40-33-5-11">8-950-40-33-5-11</a>
                </p>
                <p>
                    <i class="nav-icon fas fa-envelope"></i> Почта:
                    <a href="mailto:smart@soft.com">smart@soft.com</a>
                </p>
                <p>
                    <i class="fab fa-telegram"></i> Телеграм:
                    <a href="tg://resolve?domain=t24234est"> Написать </a>
                </p>
                <p>
                    <i class="fab fa-whatsapp"></i> WhatsApp:
                    <a href="whatsapp://send?text=Hello&phone=+31611111111&abid=+31611111111"> Написать</a>
                </p>
            </div>
            <div class="col-lg-4 col-sm-12">
                <address>
                    <p><i class="fas fa-map-marker-alt"></i> Наш офис:</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1115.0777361561848!2d92.97387965838506!3d56.01597999515615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5cd7a56be9500b6d%3A0x7609923bdddf91e4!2z0YPQuy4g0K7QvdC-0YHRgtC4LCAyNiwg0JrRgNCw0YHQvdC-0Y_RgNGB0LosINCa0YDQsNGB0L3QvtGP0YDRgdC60LjQuSDQutGA0LDQuSwgNjYwMTIz!5e0!3m2!1sru!2sru!4v1609915933706!5m2!1sru!2sru"
                        width="300" height="150" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </address>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('assets/user/js/user.js')}}"></script>
<!--
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
-->

<script>
    $('.nav-menu a').each(function () {
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        let link = this.href;
        if (link == location) {
            $(this).addClass('active');
        }
    });
</script>

</body>
</html>
