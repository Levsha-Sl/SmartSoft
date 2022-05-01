@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Создание категории</h1>
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
    <form role="form" method="post" action="{{route('categories.store')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                       id="title"
                       placeholder="Название категории">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror"
                          rows="5"
                          id="description"
                          placeholder="Расскажите о категории"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Изображение</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Выбрать</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Загрузить</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </div>
    </form>
@endsection
