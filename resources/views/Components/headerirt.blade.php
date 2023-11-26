<!-- Scripts -->
<!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
@props(['activeLink' => 'dashboard'])
<header class="bg-primary sticky top-0 ">
    <nav class="px-4 lg:px-6 py-2.5 ">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <!-- logo -->
            <a href="https://flowbite.com" class="flex items-center">
                <img class="w-10" src="{{ asset('img/logo putih.svg') }}" class="mr-3 h-6 sm:h-9" alt="StuBaby Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap text-white px-2">StuBaby</span>
            </a>
            <!-- profile -->
            <div class="flex items-center lg:order-2 " id="nav-toggle">
                <div class="relative">
                    <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
                        <div class="flex items-center mx-2">
                            @if(Auth::user()->foto)
                            <img class="object-cover w-8 h-8 rounded-full" src="{{ asset('path/to/user-profile-image.jpg') }}" alt="{{ Auth::user()->name }}" aria-hidden="true">
                            @else
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 rounded-full text-white flex items-center justify-center">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            @endif
                            <span class="ml-2 text-sm font-semibold text-white">{{ Auth::user()->name }}</span>
                        </div>
                    </button>
                    <template x-if="isProfileMenuOpen" >
                        <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu" class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md " aria-label="submenu">
                            <li class="flex">
                                <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover-bg-gray-100 hover-text-gray-800 " href="#">
                                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    <span>Profile</span>
                                </a>
                            </li>
                            <li class="flex">
                                <a class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 " href="#">
                                    <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013-3v1"></path>
                                    </svg>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <span href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                         </span>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </template>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-white rounded-lg lg:hidden hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-100 " aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <!-- menu -->
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/irt/dashboard" class="block py-2 pr-4 pl-3 {{ $activeLink == 'dashboard' ? 'text-yellow-400' : 'text-white' }} hover:text-yellow-400">Beranda</a>
                    </li>
                    <li>
                        <a href="/irt/diarykecil" class="block py-2 pr-4 pl-3 {{ $activeLink == 'diarykecil' ? 'text-yellow-400' : 'text-white' }} hover:text-yellow-400">DiaryKecil</a>
                    </li>
                    <li>
                        <a href="/irt/konsultasi" class="block py-2 pr-4 pl-3 {{ $activeLink == 'konsultasi' ? 'text-yellow-400' : 'text-white' }} hover:text-yellow-400">Konsultasi</a>
                    </li>
                    <li>
                        <a href="/irt/artikel" class="block py-2 pr-4 pl-3 {{ $activeLink == 'artikel' ? 'text-yellow-400' : 'text-white' }} hover:text-yellow-400">Artikel</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    document.getElementById('nav-toggle').onclick = function() {
        document.getElementById("mobile-menu-2").classList.toggle("hidden");
    }
</script>