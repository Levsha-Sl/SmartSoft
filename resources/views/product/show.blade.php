@extends('layouts.layout')

@section('header')
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../index.html">Главная</a></li>
                <li class="breadcrumb-item"><a href="archivators.html">Архиваторы</a></li>
                <li class="breadcrumb-item active" aria-current="page">7Zip</li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <h1>Архиватор 7Zip</h1>
    <div class="row" style="margin-top: 45px">
        <div class="col-lg-6 col-sm-12">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div>
                    <figure>
                        <img class="card__img" src="../image/sevenzip.png">
                    </figure>
                    <figcaption class="figcapt">
                        Бесплатный архиватор 7Zip
                    </figcaption>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <h3>Описание ПО</h3>
            <p>
                7-Zip — свободный файловый архиватор с высокой степенью сжатия данных. Поддерживает несколько
                алгоритмов
                сжатия и множество форматов данных,
                включая собственный формат 7z c высокоэффективным алгоритмом сжатия LZMA.
                Программа разрабатывается с 1999 года, она бесплатна и имеет открытый исходный код, большая часть
                которого свободно
                распространяется на условиях лицензии GNU LGPL, за исключением кода распаковщика UnRAR, который
                имеет
                ограничения. <br>
                Основная платформа — Windows (в том числе Windows CE), где доступны две версии программы: с
                графическим
                интерфейсом и версия для командной строки.
                Консольная версия была портирована сообществом разработчиков для систем стандарта POSIX под общим
                названием p7zip.
                Портированные версии для других систем, также как и оригинальная программа 7-Zip,
                доступны на сайте системы SourceForge (по состоянию на 5 сентября 2017 года, программа была скачана
                с
                сайта более 412 млн раз).
                7-Zip является победителем SourceForge.net Community Choice Awards 2007 года в категориях «Лучший
                проект» и «Лучший технический дизайн».
            </p>
            <a href="../image/sevenzip.png" download class="btn btn-success">Скачать</a>
        </div>
        <div class="col-12" style="margin-top: 60px">
            <h3>Сравнение архиваторов</h3>
            <table class="table table-hover table-responsive" style="margin-top: 35px">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Бесплатный</th>
                    <th scope="col">RAR</th>
                    <th scope="col">7Zip</th>
                    <th scope="col">ZIP</th>
                    <th scope="col">TAR</th>
                    <th scope="col">Windows</th>
                    <th scope="col">Linux</th>
                    <th scope="col">MacOS</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">7Zip</th>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                </tr>
                <tr>
                    <th scope="row">WinRAR</th>
                    <td>-</td>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">WinZip</th>
                    <td>-</td>
                    <td>+</td>
                    <td>-</td>
                    <td>+</td>
                    <td>+</td>
                    <td>+</td>
                    <td>-</td>
                    <td>+</td>
                </tr>
                </tbody>
            </table>
        </div>
        <h3 style="margin-top: 30px">Похожие ПО</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 30px">
            <div class="col">
                <div class="card seem-program">
                    <img src="../image/haozip.jfif" class="seem-product__img card-img-top" alt="HaoZip">
                    <div class="card-body">
                        <h5 class="card-title">HaoZip</h5>
                        <p class="card-text product-text">Мощный бесплатный архиватор, со многими полезными
                            дополнительными возможностями.</p>
                        <a class="btn btn-primary product-ref" href="#">На страницу продукта</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card seem-program">
                    <img src="../image/winrar.png" class="seem-product__img card-img-top" alt="WinRAR">
                    <div class="card-body">
                        <h5 class="card-title">WinRAR</h5>
                        <p class="card-text product-text">Один из самых популярных сервисных программ для работы с
                            файловыми архивами.</p>
                        <a class="btn btn-primary product-ref" href="#">На страницу продукта</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card seem-program">
                    <img src="../image/winzip.jpg" class="seem-product__img card-img-top" alt="WinZip">
                    <div class="card-body">
                        <h5 class="card-title">WinZip</h5>
                        <p class="card-text product-text">Файловый архиватор и компрессор фирмы Corel для
                            операционных
                            систем Microsoft Windows, OS X, iOS и Android.</p>
                        <a class="btn btn-primary product-ref" href="#">На страницу продукта</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
