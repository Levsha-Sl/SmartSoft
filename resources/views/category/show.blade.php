@extends('layouts.layout')

@section('title', $category->title . ' | SmartSoft')

@section('header')
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('categories')}}"> Категории</a></li>
                <li class="breadcrumb-item"><a>{{$category->title}}</a></li>
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

    <ul class="pagination">
        {{ $categories->links() }}
    </ul>
@endsection
