@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Продукт</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Продукт</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{route('product.edit' , $product->id)}}" class="btn btn-primary">Редагувати</a>
                            </div>
                            <form action="{{route('product.delete', $product->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Видалити">
                            </form>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{$product->id}}</td>
                                </tr>
                                <tr>
                                    <td>Назва</td>
                                    <td>{{$product->title}}</td>
                                </tr>
                                <tr>
                                    <td>Опис</td>
                                    <td>{{$product->description}}</td>
                                </tr>
                                <tr>
                                    <td>Контент</td>
                                    <td>{{$product->content}}</td>
                                </tr>
                                <tr>
                                    <td>Ціна</td>
                                    <td>{{$product->price}}</td>
                                </tr>
                                <tr>
                                    <td>Стара ціна</td>
                                    <td>{{$product->old_price}}</td>
                                </tr>
                                <tr>
                                    <td>Кільксть</td>
                                    <td>{{$product->count}}</td>
                                </tr>
                                <tr>
                                    <td>Категорія</td>
                                    <td>{{$category->title}}</td>
                                </tr>
{{--                                <tr>--}}
{{--                                    <td>Теги</td>--}}
{{--                                    <td>@foreach($product->tag as $tag)--}}
{{--                                            <span class="mr-1">{{$tag}}}</span>--}}
{{--                                    @endforeach</td>--}}
{{--                                </tr>--}}
                                <tr>
                                    <td>Кольори</td>
                                    <td>{{$product->colors}}</td>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
