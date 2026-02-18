<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('tittle', 'Meu site')
    </title>
</head>


<body>
    <header>
        <a href="{{ Route('home_page') }}">Home</a>
        <a href="{{ Route('services_page') }}">services</a>
        <a href="{{ Route('contato_page') }}">contato</a>
    </header>
    <hr>
    <main>
        @yield('content')
    </main>
    <hr>
    <footer>
        @include('footer')
    </footer>
</body>

</html>
