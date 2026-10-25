<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('css')
</head>
<body class="bg-gray-50 text-gray-800 flex flex-col min-h-screen">

    @include('partials.header')

    <main class="flex-1 max-w-5xl w-full mx-auto px-4 py-10">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>