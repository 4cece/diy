<div class="flex flex-wrap place-items-center">
  <section class="relative mx-auto">
      <!-- navbar -->
    <nav class="flex justify-between bg-purple w-screen">
      <div class="px-5 xl:px-12 py-6 flex w-full items-center text-green-light">
        <a class="text-3xl font-bold font-heading text-green-light" href="#">
          <x-application-logo class="block h-10 w-auto fill-current" />
        </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
          <li><a class="hover:text-green-light text-white" href="{{ route('home') }}">Home</a></li>
          <li><a class="hover:text-green-light text-white" href="{{ route('about') }}">about</a></li>
          <li><a class="hover:text-green-light text-white" href="{{ route('receipes') }}">Recettes</a></li>
          <li><a class="hover:text-green-light text-white" href="{{ route('ingredient-types') }}">Ingrédients</a></li>
          <li><a class="hover:text-green-light text-white" href="{{ route('blog') }}">Blog</a></li>
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center">
          @if (Route::has('login'))
          <div class="hidden  px-6 py-4 sm:block">
              @auth
                  <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Dashboard</a>
              @else
                  <a href="{{ route('login') }}" class="text-sm text-white underline">Log in</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a>
                  @endif
              @endauth
          </div>
      @endif
          
    
        </div>
      </div>
      <!-- Responsive navbar -->
      <a class="xl:hidden flex mr-6 items-center" href="#">
        <span class="flex absolute -mt-5 ml-4">
          <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
          </span>
        </span>
      </a>
      <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </a>
    </nav>
    
  </section>
</div>
