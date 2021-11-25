<div class="flex flex-wrap place-items-center">
  <section class="relative mx-auto">
      <!-- navbar -->
    <nav class="flex justify-between bg-purple w-screen text-green-light">
      
      <div class="px-5 xl:px-12 py-6 flex justify-between w-full items-center ">
        <a class="text-3xl font-bold font-heading" href="#">
          <x-LogoGreen class="block h-10 w-auto fill-current" />
        </a>
        <!-- Responsive navbar -->

      <a class="navbar-burger self-center mr-12 xl:hidden" id="burger" href="">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading gap-12 menu">
          <li class="m-0 p-0"><a class="hover:text-green-light text-white" href="{{ route('home') }}">Home</a></li>
          <li class="m-0 p-0"><a class="hover:text-green-light text-white" href="{{ route('about') }}">about</a></li>
          <li class="m-0 p-0"><a class="hover:text-green-light text-white" href="{{ route('receipes') }}">Recettes</a></li>
          <li class="m-0 p-0"><a class="hover:text-green-light text-white" href="{{ route('ingredient-types') }}">Ingrédients</a></li>
          <li class="m-0 p-0"><a class="hover:text-green-light text-white" href="{{ route('blog') }}">Blog</a></li>
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center menu">
          @if (Route::has('login'))
          <div class="hidden sm:block">
              @auth
                  <a href="{{ url('/dashboard') }}" class="text-sm text-white underline">Dashboard</a>
              @else
              <div class="flex justify-center">
                <div x-data="{ dropdownOpen: true }" class="relative">
                  <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md p-2 focus:outline-none">
                <svg 
                  version="1.1" 
                  xmlns="http://www.w3.org/2000/svg" 
                  xmlns:xlink="http://www.w3.org/1999/xlink" 
                  width="60" 
                  height="60"
                  fill="white">
                
                  <title>Abstract user icon</title>
                
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
      </div>
      
    </nav>
    
  </section>

  <script>
    let burger = document.querySelector('#burger');
    let menu =  document.querySelector('.menu')

    burger.addEventListener("click", function(event){
       // pour éviter d'envoyer le formulaire
       event.preventDefault();

      console.log('test');

      menu.style.display = 'block'
    })
  </script>
</div>
