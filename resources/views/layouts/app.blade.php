<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- font awesome include --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    {{-- CUSTOM CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    {{-- GOOGLE FONTS --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700;900&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>

