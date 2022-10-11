<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>
<body>
    <div class="wrap">
        <a class="logo" href="/b">MY DORM</a>
        <div class="list">
            <a class="item" href="{{route('students.index')}}">Студенты</a>
            <a class="item" href="{{route('room.index')}}">Комнаты</a>
            <a class="item" href="/tower">Cекции</a>
            <a class="item" href="/tower">Отчёт</a>
        </div>
        <a href="#" class="item">Выход</a>
    </div>
    <main>
        @yield('content')
    </main>
</body>
</html>
