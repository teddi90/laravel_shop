@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати колір</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Кольори</li>
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
                <form action="{{route('color.update', $color->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div id="demo" class="input-group" title="Виберіть колір">
                            <input type="text"  name="title" class="form-control input-lg" value="{{$color->title}}"/>
                            <span class="input-group-append">
                            <span class="input-group-text colorpicker-input-addon"><i></i></span>
                          </span>
                        </div>
                        <script>
                            $(document).ready(function() {
                                $('#demo').colorpicker({

                                });
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <input  type="submit" class="btn btn-primary" value="Добавити">
                    </div>

                </form>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
