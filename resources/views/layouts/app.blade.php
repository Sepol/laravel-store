<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Вход в личный кабинет') }}</title>

  <!-- Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset ('assets/css/auth/auth.css') }}">

</head>
<body>

    <div class="container">
        <div class="frame">
            @yield('content')
        </div>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ asset ('assets/js/auth/auth.js') }}"></script>

</body>
</html>
