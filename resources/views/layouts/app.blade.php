<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
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
        @livewireStyles
        @yield('page_css')
    </head>
    <body>
      <div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen}"
      >
        @include('layouts.sidebar')
        <div class="flex flex-col flex-1">
          @include('layouts.header')
          <main class="h-full pb-16 overflow-y-auto">
              {{ $slot }}
          </main>
        </div>
      </div>

      @livewireScripts
      @yield('scripts')
      @yield('page_scripts')
    </body>
</html>
