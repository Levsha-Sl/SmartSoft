@extends('admin.layouts.layout')

@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mt-2 mr-4">Список слайдов</h3>

                <a href="{{ route('slides.create') }}" class="btn btn-primary">Добавить слайд</a>

                <div class="card-tools mt-2">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">


                @if(count($slides))
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 30px">#</th>
                            <th>Верхний тескт</th>
                            <th>Нижний текст</th>
                            <th>URL</th>
                            <th>Работа</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($slides as $slide)
                            <tr>
                                <td>{{ $slide->id }}</td>
                                <td>{{ $slide->title }}</td>
                                <td>{{ $slide->description }}</td>
                                <td>@if($slide->url)<a href="{{ $slide->url }}">ссылка</a>@endif</td>
                                <td>@if($slide->active) вкл @else выкл @endif</td>
                                <td>
                                    <a href="{{route('slides.edit', ['slide' =>$slide->id])}}"
                                       class="btn btn-info btn-sm float-left mr-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <form
                                        action="{{ route('slides.destroy', ['slide' => $slide->id]) }}"
                                        method="post" class="float-left">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Подтвердите удаление')">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Слайдов пока нет...</p>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{ $slides->links() }}
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
