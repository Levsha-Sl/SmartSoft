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
    <form role="form" method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                       id="title"
                       value="{{old('title')}}"
                       placeholder="Название категории">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea type="text" id="description" name="description"
                          class="form-control @error('description') is-invalid @enderror"
                          rows="5" placeholder="Расскажите о категории">{{old('description')}}</textarea>
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
