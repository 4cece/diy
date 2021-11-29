<div class="w-screen my-auto bg-purple">

<nav class="border-gray-200 px-10">
  <div class="container mx-auto flex flex-wrap items-center justify-between">
  <a href="{{ route('home') }}" class="flex">
    <x-LogoGreen class="block h-10 w-auto fill-current" />
  </a>
  <div class="flex md:order-2">
        <div class="hidden xl:flex items-center space-x-5 items-center menu">
          @if (Route::has('login'))
          <div class="hidden sm:block">
              @auth
                  <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Dashboard</a>
              @else
              <div class="flex justify-center">
                <div x-data="{ dropdownOpen: false }" class="relative">
                  <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md p-2 focus:outline-none">
                <svg 
                  version="1.1" 
                  xmlns="http://www.w3.org/2000/svg" 
                  xmlns:xlink="http://www.w3.org/1999/xlink" 
                  width="60" 
                  height="60"
                  fill="white">
                                
                  <defs>
                    <clipPath id="circular-border">
                      <circle cx="30" cy="30" r="25" />
                    </clipPath>
                  </defs>
                  
                  <circle cx="30" cy="30" r="28" fill="black" />
                  <circle cx="30" cy="23" r="10" />
                  <circle cx="30" cy="55" r="19" clip-path="url(#circular-border)" />
                </svg>
                     
                  </button>
                
                  <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 z-10"></div>
                  
                    <div x-show="dropdownOpen" class="absolute mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20">
                      <a href="{{ route('login') }}" class="text-sm text-purple underline">Log in</a>

                      @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-purple underline">Register</a>
                      @endif
                    
                    </div>
                </div>
                </div>
              @endauth
          </div>
      @endif
          
    
        </div>
      <button data-collapse-toggle="mobile-menu-3" type="button" class="md:hidden text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center" aria-controls="mobile-menu-3" aria-expanded="false">
      <span class="sr-only">Open main menu</span>
      <svg class="w-6 h-6" fill="#e5f9e0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      <svg class="hidden w-6 h-6" fill="#e5f9e0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1 p-5" id="mobile-menu-3">
    <ul class="flex-col md:flex-row flex md:space-x-8 md:mt-0 md:text-sm md:font-medium">
      <li>
        <a href="{{ route('home') }}" class="text-white">Home</a>
      </li>
      <li>
        <a href="{{ route('about') }}" class="text-white">About</a>
      </li>
      <li>
        <a href="{{ route('receipes') }}" class="text-white">Recettes</a>
      </li>
	  <li>
        <a href="{{ route('ingredient-types') }}" class="text-white">Ingrédients</a>
      </li>
	  <li>
        <a href="{{ route('blog') }}" class="text-white">Blog</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

</div>

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
