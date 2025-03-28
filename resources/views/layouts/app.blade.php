<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous"/>

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <link rel="stylesheet" href="{{ asset('custom.css') }}"/>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
{{--@if(auth()->check() && auth()->user()->isUnverified())--}}
{{--    <div class="container mt-4 text-center">--}}
{{--        <h2>Ожидание подтверждения...</h2>--}}
{{--        <p>Ваш аккаунт ещё не подтверждён. Пожалуйста, дождитесь подтверждения администратором.</p>--}}
{{--    </div>--}}
{{--@else--}}
    @include('layouts.navigation')

    <div class="container mt-4">
        @yield('main')
    </div>
{{--@endif--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

</body>
</html>
