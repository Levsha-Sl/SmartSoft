<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Windows 10, Windows 7, Windows 8, Windows XP, Windows Vista, Soft for Windows">
    <meta name="content" content="Обзоры, тестирование ПО для вашей Windows найдется на нашем сайте">
    <meta name="author" content="Вячеслав Ширнин"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="./image/logo-windows.ico">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!--
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      -->
    <link rel="stylesheet" href="{{asset('assets/user/css/user.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />




    <title>
        Главная | SmartSoft
    </title>
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
    <a class="navbar-brand" href="./index.html"><img width="45" height="45" alt="Windows-icon"
                                                     src="./image/logo-windows.svg"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./index.html">Главная<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./html/tops.html">Топы</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Категории
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="./html/archivators.html">Архиваторы</a>
                    <a class="dropdown-item" href="./html/antivirus.html">Антивирусы</a>
                    <a class="dropdown-item" href="./html/browsers.html">Браузеры</a>
                    <a class="dropdown-item" href="./html/utils.html">Утилиты</a>
                    <a class="dropdown-item" href="./html/office.html">Офисное ПО</a>
                    <a class="dropdown-item" href="./html/graphics.html">Графика</a>
                </div>
            </li>
            <li class="nav-item order-call">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#order_form">Подписаться на
                    новости
                </button>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Поискать по сайту" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
        </form>
    </div>
</nav>

<div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="slide__img" src="./image/chromium.jfif" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Chromium - большой батя</h2>
                    <h4><a href="https://habr.com/ru/company/vdsina/blog/518416/"
                           title="ссылка на статью с Habra">Как Chromium удалось захватить 90% рынка
                            браузеров</a></h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="slide__img" src="./image/lab_k.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Лаборатория касперского</h2>
                    <h4>Международная компания, работающая в сфере информационной безопасности с 1997 года</h4>
                </div>
            </div>
            <div class="carousel-item">
                <img class="slide__img" src="./image/windows.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Windows - одна из распространнешых ОС на ПК</h2>
                    <h4>На июнь 2019 года рыночная доля Windows составила приблизительно 88%</h4>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section>
        <h2 class="header display-3">Лидеры недели</h2>
        <div class="product">
            <div class="product__img">
                <img src="./image/sevenzip.png" alt="Архиватор 7-Zip">
            </div>
            <div class="product__desc">
                <div class="margin-35">
                    <h3><a href="./html/7zip.html" title="Архиватор 7-Zip">Архиватор 7-Zip</a></h3>
                    <p>
                        свободный файловый архиватор с высокой степенью сжатия данных.
                        Поддерживает несколько алгоритмов сжатия и множество форматов данных,
                        включая собственный формат 7z c высокоэффективным алгоритмом сжатия LZMA.
                        Программа разрабатывается с 1999 года, она бесплатна и имеет открытый исходный код,
                        большая часть которого свободно распространяется на условиях лицензии GNU LGPL,
                        за исключением кода распаковщика UnRAR, который имеет ограничения. Основная платформа —
                        Windows (в том числе Windows CE).
                    </p>
                    <a class="button btn--download" download href="./image/sevenzip.png">Скачать</a>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product__img">
                <img src="./image/mozilla_firefox.jfif" alt="Браузер Mozilla Firefox">
            </div>
            <div class="product__desc">
                <div class="margin-35">
                    <h3>Браузер Mozilla Firefox</h3>
                    <p>
                        Мощный, популярный и многофункциональный браузер,
                        что является гарантом безопасной, быстрой и результативной деятельности
                        пользователя на просторах Интернета. Основной функциональный багаж браузера,
                        ориентированный на пользователей, – это полезные дополнения, расширения,
                        темы, закладки, функция синхронизации работы с другими устройствами, менеджер
                        управления паролями, сбалансированное использование памяти и тому подобное.
                    </p>
                    <a class="button btn--download" download href="./image/mozilla_firefox.jfif">Скачать</a>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product__img">
                <img src="./image/kaspersky.png" alt="Антивирус Kaspersky Anti-Virus">
            </div>
            <div class="product__desc">
                <div class="margin-35">
                    <h3>Антивирус Kaspersky</h3>
                    <p>
                        Надежный антивирус для Windows защитит вас от программ-вымогателей,
                        шифровальщиков и атак хакеров. Это удобное в использовании решение обеспечит
                        безопасность ваших действий в интернете. По результатам AV-TEST - это лучшая
                        защита от вирусов, а так же самая высокая производительность
                        системы без ущерба для производительности.
                    </p>
                    <a class="button btn--download" download href="./image/kaspersky.png">Скачать</a>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product__img">
                <img src="./image/CPUZ.png" alt="Утилита CPU-Z">
            </div>
            <div class="product__desc">
                <div class="margin-35">
                    <h3>Утилита CPU-Z</h3>
                    <p>
                        Бесплатная прикладная программа-утилита для отображения технической информации о
                        персональном компьютере пользователя (характеристик и параметров работы оборудования),
                        работающая под ОС Microsoft Windows начиная с версии Windows 95 (включая Windows 10).
                        Программа определяет технические характеристики центрального процессора, материнской
                        платы и BIOS, оперативной памяти, видеокарты, кроме жёсткого диска. Популярна среди
                        IT-специалистов, компьютерных техников и ремонтников, геймеров и оверклокеров.
                    </p>
                    <a class="button btn--download" download href="./image/CPUZ.png">Скачать</a>
                </div>
            </div>
        </div>
    </section>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-12 mr-auto">
                <p><i class="fas fa-phone-alt"></i> Телефон: <a href="tel:8-950-40-33-5-11">8-950-40-33-5-11</a></p>
                <p><span><i class="nav-icon fas fa-envelope"></i></span> Почта: <a
                        href="mailto:smart@soft.com">smart@soft.com</a></p>
                <p><span><i class="fab fa-telegram"></i></span> Телеграм: <a
                        href="tg://resolve?domain=t24234est"> Написать </a></p>
                <p><span><i class="fab fa-whatsapp"></i></span> WhatsApp: <a
                        href="whatsapp://send?text=Hello&phone=+31611111111&abid=+31611111111"> Написать</a></p>
            </div>
            <div class="col-lg-4 col-sm-12">
                <address>
                    <p><span><i class="fas fa-map-marker-alt"></i></span> Наш офис: </p>
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
</body>
</html>
