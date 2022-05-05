@extends('layouts.layout')

@section('title', 'Категории | SmartSoft')

@section('header')
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Категории</a></li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')
    <div id="pdopage">
        <div class="row row-cols-1 row-cols-md-3 sets">
            @foreach($categories as $category)
                <div class="col mb-4">
                    <div class="card seem-program">
                        <img src="{{$category->getImage()}}" class="seem-product__img card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{$category->title}}</h5>
                            <p class="card-text product-text">
                                {!!Str::limit(($category->description),120, '...')!!}
                            </p>
                            <a class="btn btn-primary product-ref"
                               href="{{route('categories.single', ['slug'=>$category->slug])}}">Открыть категорию</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!--    <div class="col mb-4">
            <div class="card seem-program"><img src="/assets/images/arxivatoryi.jpg"
                                                class="seem-product__img card-img-top"
                                                alt="/assets/images/arxivatoryi.jpg">
                <div class="card-body"><h5 class="card-title">Архиваторы</h5>
                    <p class="card-text product-text"></p>
                    <p>Архиватор&nbsp;—&nbsp;программа, предназначенная для&nbsp;сжатия без потерь&nbsp;одного и
                        более&nbsp;файлов&nbsp;в единый файл-архив&nbsp;или…</p>
                    <p></p> <a class="btn btn-primary product-ref" href="kategorii/arxivatoryi/">Открыть
                        категорию</a></div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card seem-program"><img src="/assets/images/antivirusyi.jpg"
                                                class="seem-product__img card-img-top"
                                                alt="/assets/images/antivirusyi.jpg">
                <div class="card-body"><h5 class="card-title">Антивирусы</h5>
                    <p class="card-text product-text"></p>
                    <p>Антивирус — специализированная программа для обнаружения компьютерных вирусов, а также
                        нежелательных…</p>
                    <p></p> <a class="btn btn-primary product-ref" href="kategorii/antivirusyi/">Открыть
                        категорию</a></div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card seem-program"><img src="/assets/images/brauzeryi.jpg"
                                                class="seem-product__img card-img-top"
                                                alt="/assets/images/brauzeryi.jpg">
                <div class="card-body"><h5 class="card-title">Браузеры</h5>
                    <p class="card-text product-text"></p>
                    <p>Браузер, или веб-обозреватель — прикладное программное обеспечение для просмотра страниц,
                        содержания…</p>
                    <p></p> <a class="btn btn-primary product-ref" href="kategorii/brauzeryi/">Открыть
                        категорию</a></div>
            </div>
        </div>-->

    <ul class="pagination">
        {{ $categories->links() }}
    </ul>
@endsection

