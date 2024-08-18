<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>Laravel</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-100">
       <nav className="bg-white shadow-lg p-4">
      <div className="container mx-auto px-4">
        <div className="flex justify-between items-center">
     <div className="flex space-x-4">
     <a href="{{ route('home') }}" className=" {{ request()->routeIs('home') ? 'text-blue-500' : 'text-gray-600' }} py-5 px-3">Home</a>
     <a href="{{ route('about') }}" className=" {{ request()->routeIs('about') ? 'text-blue-500' : 'text-gray-600' }}  py-5 px-3">About</a>
     </div>
</div>



</div>
    </nav>
        <div class="container mx-auto py-6 ">
           @yield('content')
        </div>
    </body>
</html>
