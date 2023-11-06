<header class="z-10 py-4 bg-white shadow-md">
  <div class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600">

    <!-- Logo -->
    <div class="flex items-center">
      <img class="w-32" src="{{ asset('img/logo_1.svg') }}" alt="Logo" class="w-12 h-12">
    </div>

    <ul class="flex items-center flex-shrink-0 space-x-6">
      <!-- Notifications menu -->
      <li class="relative">
        <button class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
          @click="toggleNotificationsMenu" @keydown.escape="closeNotificationsMenu" aria-label="Notifications"
          aria-haspopup="true">
          <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path>
          </svg>
          <!-- Notification badge -->
          <span aria-hidden="true"
            class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full"></span>
        </button>
        <template x-if="isNotificationsMenuOpen">
          <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @click.away="closeNotificationsMenu" @keydown.escape="closeNotificationsMenu"
            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md">
            <li class="flex">
              <a
                class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800"
                href="#">
                <span>Konsultasi</span>
                <span
                  class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full">
                  13
                </span>
              </a>
            </li>
          </ul>
        </template>
      </li>

      <!-- Profile menu -->
      <li class="relative">
        <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
          @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account" aria-haspopup="true">
          <div class="flex items-center">
            @if(Auth::user()->foto)
              <img class="object-cover w-8 h-8 rounded-full" src="{{ asset('path/to/user-profile-image.jpg') }}"
                alt="{{ Auth::user()->name }}" aria-hidden="true">
            @else
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                class="w-8 h-8 rounded-full text-indigo-500 flex items-center justify-center">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            @endif
            <span class="ml-2 text-sm font-semibold">{{ Auth::user()->name }}</span>
          </div>
        </button>
        <template x-if="isProfileMenuOpen">
          <ul x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" @click.away="closeProfileMenu" @keydown.escape="closeProfileMenu"
            class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark-bg-gray-700"
            aria-label="submenu">
            <li class="flex">
              <a
                class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover-bg-gray-100 hover-text-gray-800 dark-hover-bg-gray-800 dark-hover-text-gray-200"
                href="#">
                <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                  <path
                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span>Profile</span>
              </a>
            </li>
            <li class="flex">
    <a
        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover-text-gray-200"
        href="#">
        <svg class="w-4 h-4 mr-3" aria-hidden="true" fill="none" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
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
      </li>
    </ul>
  </div>
</header>
