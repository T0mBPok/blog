<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="{{  route('sign')  }}" class="nav-link active" aria-current="page">Регистрация</a></li>
        <li class="nav-item"><a href="{{  route('login')  }}" class="nav-link">Вход</a></li>
      </ul>
    </header>
  </div>
<div class="container">
    @yield('main_content')
</div>
</body>
</html>