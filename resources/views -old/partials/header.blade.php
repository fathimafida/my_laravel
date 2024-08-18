<nav class="bg-white shadow-lg p-4 justify-center">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center">
         <div class="flex space-x-4">
            <a href="{{ route('home') }}" class=" {{ request()->routeIs('home') ? 'text-blue-500' : 'text-gray-600' }} py-5 px-3 ">Home</a>
            <a href="{{ route('about') }}" class=" {{ request()->routeIs('about') ? 'text-blue-500' : 'text-gray-600' }}  py-5 px-3">About</a>
         </div>
      </div>



    </div>
  </nav>
