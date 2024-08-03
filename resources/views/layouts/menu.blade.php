<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
    <title>Document</title>
</head>
<body>

<ul class="nav nav-tabs nav-fill">
  <li class="nav-item">
    <a class="nav-link" href="{{ route('main.index') }}">Главная страница</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('program.index') }}">Программа</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('record.index') }}">Рекорды</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('contact.index') }}">Контакты</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('list.index') }}">Список упражнений</a>
  </li>
</ul>
</div>
    @yield('content')
</body>
</html>