<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50">
    <header class="bg-cyan-950 py-4 text-white">
        <div class="flex justify-between max-w-screen-lg m-auto">
            <a href="/">AlvaroHJ</a>
            <ul class="flex gap-8">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/contact">Contacto</a>
                </li>
                <li>
                    <a href="/login">Login</a>
                </li>
                <li>
                    <a href="/register">Register</a>
                </li>
            </ul>
        </div>
    </header>
    @yield('content')
</body>

</html>
