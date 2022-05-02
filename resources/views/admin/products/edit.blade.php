@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование продукта</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <!-- form start -->
    <form method="post" action="{{route('products.update', ['product' => $product->id])}}"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                       id="title"
                       value="{{ $product->title }}"
                       placeholder="Название категории">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                          rows="5"
                          placeholder="Расскажите о категории">{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name="url" class="form-control @error('url') is-invalid @enderror"
                       id="url"
                       value="{{ $product->url }}"
                       placeholder="Ссылка на офицальную страницу">
            </div>

            <div class="form-group">
                <label for='category_id'>Категория</label>
                <select name='category_id' id='category_id'
                        class="form-control select2bs4 @error('category_id') is-invalid @enderror">
                    <option value=""></option>
                    @foreach ($categories as $key => $value)
                        <option value="{{ $key }}"
                                @if ($product->category_id === $key) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for='tags'>Теги</label>
                <select name='tags[]' id='tags' class="select2" multiple="multiple" data-placeholder="Выбор тегов"
                        style="width: 100%;">
                    @foreach ($tags as $key => $value)
                        <option value="{{ $key }}"
                                @if (in_array($key, $product->tags->pluck('id')->all())) selected @endif>{{ $value }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="thumbnail">Изображение</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control-file">
                <div><img src="{{ $product->getImage() }}" alt="" class="img-thumbnail mt-2" width="200"></div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>
@endsection
