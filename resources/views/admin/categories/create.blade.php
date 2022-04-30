@extends('admin.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Категории</h1>
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

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mt-2 mr-4">Список категорий</h3>

                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Добавить категорию</a>

                    <div class="card-tools mt-2">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Быстрый пример</font></font></h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адрес электронной почты</font></font></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите адрес электронной почты">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пароль</font></font></label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ввод файла</font></font></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Выбрать файл</font></font></label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Загрузить</font></font></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Проверить меня</font></font></label>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Представлять на рассмотрение</font></font></button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                    <!-- general form elements -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">

                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
