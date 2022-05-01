@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Редактирование категории</h1>
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
        <section class="content">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><font style="vertical-align: inherit;"><font
                                style="vertical-align: inherit;">Новая категория</font></font></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">Название</font></font></label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   placeholder="Название категории">
                        </div>
                        <div class="form-group">
                            <label>Описание</label>
                            <textarea class="form-control" rows="3" placeholder="Расскажите о категории"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile"><font style="vertical-align: inherit;"><font
                                        style="vertical-align: inherit;">Изображение</font></font></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile"><font
                                            style="vertical-align: inherit;"><font style="vertical-align: inherit;">Выбрать
                                                файл</font></font></label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text"><font style="vertical-align: inherit;"><font
                                                style="vertical-align: inherit;">Загрузить</font></font></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font
                                    style="vertical-align: inherit;">Создать</font></font></button>
                    </div>
                </form>
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
