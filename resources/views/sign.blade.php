@extends('layout')

@section('title')
    Регистрация
@endsection

@section('main_content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{  route('sign-form')  }}" method="post">
        @csrf
        <div class="form-group">
            <h2>Личные данные</h2>
            <input type="email" name="email" id="email" placeholder="Введите email" class = "form-control mb-2">
            <input type="text" name="surname" id="surname" placeholder="Введите фамилию" class="form-control mb-2">
            <input type="text" name="name" id="name" placeholder="Введите имя" class="form-control mb-2">
            <input type="text" name="surname_2" id="surname_2" placeholder="Введите отчество" class="form-control mb-2">
        </div>
        <div class="form-group">
            <h2>Паспортные данные</h2>
            <input type="text" name="series " id="series" class="form-control mb-2" placeholder="Cерия">
            <input type="text" name="number " id="number" class="form-control mb-2" placeholder="Номер">
            <input type="date" name="date" id="date" class="form-control mb-2" placeholder="Дата выдачи">
            <input type="text" name="issued_by" id="issued_by" class="form-control mb-2" placeholder="Кем выдан">
            <input type="text" name="code" id="code" class="form-control mb-2" placeholder="Код подразделения">
        </div>
        
        <button type="submit" class = "btn btn-success mb-2">Зарегистрироваться</button>
    </form>
@endsection
