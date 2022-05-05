@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Новый слайд</h1>
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
    <form role="form" method="post" action="{{route('slides.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Верхний тескт *</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                       id="title"
                       value="{{old('title')}}"
                       placeholder="h2...">
            </div>
            <div class="form-group">
                <label for="description">Нижний текст</label>
                <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                       id="description"
                       value="{{old('description')}}"
                       placeholder="h4...">
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" name="url" class="form-control"
                       id="url"
                       value="{{old('url')}}"
                       placeholder="ссылка если надо">
            </div>
            <div class="form-check mb-2">
                <input type="checkbox" name="active" class="form-check-input" id="active">
                <label class="form-check-label" for="active">Показывать в карусели?</label>
            </div>
            <div class="form-group">
                <label for="thumbnail">Изображение</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control-file">
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>
@endsection
