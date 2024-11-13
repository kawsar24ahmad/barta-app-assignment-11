<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://cdn.tailwindcss.com"></script>

    <link
      rel="preconnect"
      href="https://fonts.googleapis.com" />
    <link
      rel="preconnect"
      href="https://fonts.gstatic.com"
      crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
      rel="stylesheet" />

      @livewireStyles
    <style>
      * {
        font-family: 'Inter', sans-serif;
      }
    </style>
        <title>{{ $title ?? 'Page Title' }}</title>
    </head>
    <body>
        @if (!in_array(Route::currentRouteName(), ['login', 'register']))
            @include('partials.header')
        @endif

            {{ $slot }}


        @if (!in_array(Route::currentRouteName(), ['login', 'register']))
            @include('partials.footer')
        @endif

        @livewireScripts
    </body>
</html>
