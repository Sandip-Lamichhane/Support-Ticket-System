<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex min-h-screen bg-white text-black">

    <div class="flex flex-col flex-1">
        {{-- Topbar --}}
        @include('partial.topbar')

        {{-- Main content wrapper (Sidebar + Content side by side) --}}
        <div class="flex min-h-[calc(100vh-64px)]"> {{-- 64px = topbar height approx --}}

            {{-- Sidebar on the left --}}
            @include('partial.sidebar')

            {{-- Main content on the right --}}
            <main class="flex-1 p-6">
                @yield('content')
            </main>
        </div>
</body>

</html>
