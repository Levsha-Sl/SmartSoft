@extends('layouts.layout')

@section('title', $product->title . ' | SmartSoft')

@section('header')
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a
                        href="{{route('home')}}">
                        Главная</a></li>
                <li class="breadcrumb-item"><a
                        href="{{route('categories.single', ['slug'=>$product->category->slug])}}">
                        {{$product->category->title}}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    {{$product->title}}
                </li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <h1>{{$product->title}}</h1>
    <div class="row" style="margin-top: 45px">
        <div class="col-lg-6 col-sm-12">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div>
                    <figure>
                        <img class="card__img" src="{{ $product->getImage()}}">
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <h3>Описание ПО</h3>
            <p>
                {!! $product->description !!}
            </p>
            <a href="{{$product->url}}" download class="btn btn-success">Скачать</a>
        </div>
        @if($product->tags->count())
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
        @endif
        <h3 style="margin-top: 30px">Похожие ПО</h3>
        <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top: 30px">
{{--            @foreach()--}}
{{--            <div class="col">
                <div class="card seem-program">
                    <img src="../image/haozip.jfif" class="seem-product__img card-img-top" alt="HaoZip">
                    <div class="card-body">
                        <h5 class="card-title">HaoZip</h5>
                        <p class="card-text product-text">Мощный бесплатный архиватор, со многими полезными
                            дополнительными возможностями.</p>
                        <a class="btn btn-primary product-ref" href="#">На страницу продукта</a>
                    </div>
                </div>
            </div>--}}
{{--@endforeach--}}

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
