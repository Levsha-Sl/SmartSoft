@extends('layouts.layout')

@section('title', 'Топ | SmartSoft')

@section('content')
    <section>
        <h2 class="header display-3">Новое</h2>
        @foreach($products as $product)
            <div class="product">
                <div class="product__img">
                    <img src="{{$product->getImage()}}" alt="{{$product->id_category."/".$product->title}}"/>
                </div>
                <div class="product__desc">
                    <div class="margin-35">
                        <h3><a href="{{route('products.single', ['slug' => $product->slug])}}"
                               title="">{{$product->title}}</a></h3>
                        <p>
                            {!!Str::limit(($product->description),400, '...')!!}
                        </p>
                        <a class="button btn--download btn_transparent" download href="{{$product->url}}">Скачать</a>
                        <small><a href="{{route('categories.single',['slug'=> $product->category->slug])}}"
                                  title="">{{$product->category->title}}</a></small>
                        <small>{{$product->getProductDate()}}</small>
                        <small><i class="fa fa-eye"></i> {{$product->views}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

@endsection
