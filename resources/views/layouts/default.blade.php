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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <header class="sticky top-0 z-10 py-4 text-white bg-cyan-950">
        <div class="flex justify-between max-w-screen-lg m-auto w-[90%]">
            <a href="/" class="flex items-center gap-2">
                <x-application-logo class="block w-auto text-white fill-current h-9" />LARABLOG
            </a>
            <ul class="flex gap-8">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/contact">Contacto</a>
                </li>
                @auth
                    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                @else
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </header>
    @yield('content')
    <footer class="py-8">
        <div class="flex gap-4 m-auto mb-4 w-fit">
            <a href="/" class="grid w-10 h-10 text-white bg-black rounded-full place-content-center">
                <i class="fab fa-github"></i>
            </a>
            <a href="/" class="grid w-10 h-10 text-white bg-black rounded-full place-content-center">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="/" class="grid w-10 h-10 text-white bg-black rounded-full place-content-center">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
        <p class="font-serif text-center text-gray-500">
            &copy; AlvaroHJ - {{ date('Y') }}
        </p>
    </footer>
</body>

</html>
