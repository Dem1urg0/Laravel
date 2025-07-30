<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
<header>
    @if(request()->is('admin*'))
        @include('admin.layouts.menubar')
    @else
        @include('layouts.menubar')
    @endif
    @if(session('alert'))
        <div id="session-alert"
             class="bg-blue-100 text-blue-700 p-4 rounded-md shadow-md fixed top-4 right-4 z-50 transition-opacity duration-500 ease-out">
            <p>{{ session('alert') }}</p>
        </div>
    @endif
</header>
<main class=".container mt-4 text-center container">
    @yield('content')
</main>
</body>
</html>
<script>
    const alert = document.getElementById('session-alert');

    if (alert) {
        setTimeout(() => {
            alert.classList.add('opacity-0');

            setTimeout(() => {
                alert.style.display = 'none';
            }, 500);

        }, 3000);
    }
</script>

@section('scripts')@show

