@extends('layout')

@section('title')
    Регистрация
@endsection

@section('main_content')
    <h1 class="hs">Вход</h1>
    <form action="{{  route('login-form')  }}" method="POST">
        <input type="email" id='email' name='email' placeholder="Введите email" class="form-control mb-2">
        <input type="password" id='password' name='password' placeholder="Введите пароль" class="form-control mb-2">
        <button type="submit" class="btn btn-success">Войти</button>
    </form>
@endsection