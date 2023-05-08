<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="corporate">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

<div class="navbar bg-base-100">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xs" href="/">Ultrasound<br>Healthcare<br>Training Solution</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
    @auth
                        <li><a href="{{ url('/dashboard') }}" >Dashboard</a></li>
                    @else
      <li><a href="/about">About</a></li>
      <li><a>Login</a></li>
       @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" >Register</a></li>
                        @endif

       @endauth
    </ul>
  </div>
</div>

            <!-- Page Content -->
            <main>
               {{ $slot }}
            </main>
        </div>
    </body>
</html>
