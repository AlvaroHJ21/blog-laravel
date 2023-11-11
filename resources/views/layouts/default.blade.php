<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <footer class="py-8">
        <div class="flex gap-4 m-auto w-fit mb-4">
            <a href="/" class="w-10 h-10 rounded-full bg-black text-white grid place-content-center">
                <i class="fab fa-github"></i>
            </a>
            <a href="/" class="w-10 h-10 rounded-full bg-black text-white grid place-content-center">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="/" class="w-10 h-10 rounded-full bg-black text-white grid place-content-center">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        <p class="text-center font-serif text-gray-500">
            &copy; AlvaroHJ - {{ date('Y') }}
        </p>
    </footer>
</body>

</html>
