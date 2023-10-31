<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Ahli Gizi</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    
  </head>
  <body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
    
    <!-- Side bar -->
    @include('components.sidebar')
    
      <div class="flex flex-col flex-1 w-full ml-16"> 
      <!-- Header -->
      @include('components.header')
      
        <!-- Content -->
        <main class="h-full overflow-y-auto">
          <div class="bg-white shadow-md flex justify-between items-center p-4">
            <div class="text-xl font-semibold text-gray-700 dark:text-gray-200 ml-20">Dashboard</div>
            <div id="tanggal" class="text-gray-700 dark:text-gray-200 mr-20"></div>
          </div>

          
          <div class="mt-5 text-xl font-semibold text-gray-700 dark:text-gray-200 ml-20 pl-5">Tiket Konsultasi</div>

          <hr class="mx-20 my-4 border-t border-gray-300">

          <div class="p-4 ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
              <!-- Card 1 -->
              <div class="mx-20 bg-white rounded-lg shadow-md p-10">
                <div class="flex items-center">
                  <div class="mr-4 p-2 rounded-full bg-indigo-600 text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <!-- Tambahkan ikon SVG di sini -->
                    </svg>
                  </div>
                  <div>
                    <p class="text-2xl font-semibold">10</p>
                    <p class="text-gray-500">Items</p>
                  </div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="mx-20 bg-white rounded-lg shadow-md p-10">
                <div class="flex items-center">
                  <div class="mr-4 p-2 rounded-full bg-indigo-600 text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <!-- Tambahkan ikon SVG di sini -->
                    </svg>
                  </div>
                  <div>
                    <p class="text-2xl font-semibold">10</p>
                    <p class="text-gray-500">Items</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-5 text-xl font-semibold text-gray-700 dark:text-gray-200 ml-20 pl-5">Artikel</div>

          <hr class="mx-20 my-4 border-t border-gray-300">

          <div class="p-4 ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
              <!-- Card 1 -->
              <div class="mx-20 bg-white rounded-lg shadow-md p-10">
                <div class="flex items-center">
                  <div class="mr-4 p-2 rounded-full bg-indigo-600 text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <!-- Tambahkan ikon SVG di sini -->
                    </svg>
                  </div>
                  <div>
                    <p class="text-2xl font-semibold">10</p>
                    <p class="text-gray-500">Items</p>
                  </div>
                </div>
              </div>

              <!-- Card 2 -->
              <div class="mx-20 bg-white rounded-lg shadow-md p-10">
                <div class="flex items-center">
                  <div class="mr-4 p-2 rounded-full bg-indigo-600 text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <!-- Tambahkan ikon SVG di sini -->
                    </svg>
                  </div>
                  <div>
                    <p class="text-2xl font-semibold">10</p>
                    <p class="text-gray-500">Items</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>
    </div>
  </div>
  <script>
  function getFormattedDate() {
    const today = new Date();
    const day = String(today.getDate());
    const monthNames = [
      "Januari", "Februari", "Maret", "April", "Mei", "Juni",
      "Juli", "Agustus", "September", "Oktober", "November", "Desember"
    ];
    const month = monthNames[today.getMonth()];
    const year = today.getFullYear();
    return `${day} ${month} ${year}`;
  }

  document.getElementById('tanggal').textContent = getFormattedDate();

  </script>
  </body>
</html>
