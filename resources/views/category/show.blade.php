@extends('layouts.layout')

@section('title', $category->title . ' | SmartSoft')

@section('header')
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('categories')}}"> Категории</a></li>
                <li class="breadcrumb-item"><a>{{$product->category->title}}</a></li>
            </ol>
        </nav>
    </div>
@endsection

@section('content')

@endsection
