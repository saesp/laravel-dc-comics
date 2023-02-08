<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('components.header')
    <br>
    <br>
    <main class="m-2">
        @yield('content')
    </main>
    
    <br>
    <br>
    @include('components.footer')
</body>
</html>