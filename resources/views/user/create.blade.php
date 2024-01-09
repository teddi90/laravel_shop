@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавити користувача</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Добавити</li>
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
                <form action="{{route('user.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input  type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Ім'я">
                    </div>
                    <div class="form-group">
                        <input  type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Пошта">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="password" value="{{old('password')}}" class="form-control" placeholder="Пароль">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" placeholder="Підтвердження пароля">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="surname" value="{{old('surname')}}" class="form-control" placeholder="Прізвище">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="patronymic" value="{{old('patronymic')}}" class="form-control" placeholder="Побатькові">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="age" value="{{old('age')}}" class="form-control" placeholder="Вік">
                    </div>
                    <div class="form-group">
                        <input  type="text" name="address" value="{{old('address')}}" class="form-control" placeholder="Адрес">
                    </div>
                    <div class="form-group">
                        <select  name="gender"  class="custom-select form-control" id="exampleSelectBorder">
                            <option disabled selected>Стать</option>
                            <option {{old('gender')==1 ? ' selected' : ''}} value="1">Чоловіча</option>
                            <option {{old('gender')==2 ? ' selected' : ''}} value="2">Жіноча</option>

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
