@extends('layouts.layout')

@section('header')
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
                    <h4><a href="https://habr.com/ru/company/vdsina/blog/518416/" title="ссылка на статью с Habra">Как
                            Chromium удалось захватить 90% рынка браузеров</a></h4>
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
@endsection

@section('content')
    <section>
        <h2 class="header display-3">Новое</h2>
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
                    <a class="button btn--download btn_transparent" download href="./image/sevenzip.png">Скачать</a>
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
                    <a class="button btn--download btn_transparent" download
                       href="./image/mozilla_firefox.jfif">Скачать</a>
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
                    <a class="button btn--download btn_transparent" download href="./image/kaspersky.png">Скачать</a>
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
                    <a class="button btn--download btn_transparent" download href="./image/CPUZ.png">Скачать</a>
                </div>
            </div>
        </div>
    </section>
@endsection
