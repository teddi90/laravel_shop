@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редагувати користувача</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Користувачі</li>
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
                <form action="{{route('user.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input  type="text" name="name" value="{{$user->name ?? old('name')}}" class="form-control" placeholder="Ім'я">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="surname" value="{{$user->surname ?? old('surname')}}" class="form-control" placeholder="Прізвище">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="patronymic" value="{{$user->patronymic ?? old('patronymic')}}" class="form-control" placeholder="Побатькові">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="age" value="{{$user->age ?? old('age')}}" class="form-control" placeholder="Вік">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="address" value="{{$user->address ?? old('address')}}" class="form-control" placeholder="Адрес">
                    </div>
                    <div class="form-group">
                        <select  name="gender"  class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Стать</option>
                            <option {{$user->gender || old('gender')==1 ? ' selected' : ''}} value="1">Чоловіча</option>
                            <option {{$user->gender || old('gender')==2 ? ' selected' : ''}} value="2">Жіноча</option>

                        </select>
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
