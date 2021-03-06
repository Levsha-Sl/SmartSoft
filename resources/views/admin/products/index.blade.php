@extends('admin.layouts.layout')

@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title mt-2 mr-4">Список продуктов</h3>

                <a href="{{ route('products.create') }}" class="btn btn-primary">Добавить продукт</a>

                <div class="card-tools mt-2">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">


                @if(count($products))
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th style="width: 30px">#</th>
                            <th>Нименование</th>
                            <th>Категория</th>
                            <th>Теги</th>
                            <th>Дата</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->category->title }}</td>
                                <td>{{ $product->tags->pluck('title')->join(', ') }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>
                                    <a href="{{route('products.edit', ['product' =>$product->id])}}"
                                       class="btn btn-info btn-sm float-left mr-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <form
                                        action="{{ route('products.destroy', ['product' => $product->id]) }}"
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
                    <p>Продуктов пока нет...</p>
                @endif
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                {{ $products->links() }}
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
