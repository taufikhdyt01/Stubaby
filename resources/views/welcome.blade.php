<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>StuBaby</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body class="font-poppins">
    <header class="bg-gray-600 bg-opacity-0">
        <nav class=" px-4 lg:px-6 py-2.5 ">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('/img/logo putih.svg') }}" class="mr-3 h-6 sm:h-9" alt="Stubaby Logo" />
                    <span class="self-center text-xl font-semibold text-primary whitespace-nowrap ">StuBaby</span>
                </a>
                <div class="flex items-center lg:order-2 space-x-6">
                    <a href="{{ route('register') }}" class="text-white bg-indigo-500 hover:bg-primary font-semibold hover:text-white py-2 px-4 border border-primary hover:border-transparent rounded">Daftar</a>
                    <a href="{{ route('login') }}" class="text-white bg-primary hover:bg-indigo-500 font-semibold hover:text-white py-2 px-4 border border-primary hover:border-transparent rounded">Masuk</a>
                    <!-- <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 " aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button> -->
                </div>

            </div>
        </nav>
    </header>

    <section>
        <!-- 1 -->
        <div>
            
            <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('/img/bg_landing.svg'); height: 550px">
                <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background: linear-gradient(0deg, rgba(55, 35, 52, 0.15) 0%, rgba(55, 35, 52, 0.15) 100%), linear-gradient(110deg, #F6D2FF 15.73%, rgba(217, 217, 217, 0.00) 87.48%);">
                    <div class="flex h-full items-center text-left">
                        <div class="text-[#34395E] ml-32">
                            <h2 class="text-[42px] font-bold">Cegah Anak dari Stunting</h2>
                            <h2 class="mb-6 text-[42px] font-bold">dengan <span class="text-primary">Mudah</span> dan <span class="text-primary">Terekam</span></h2>
                            <button type="button" class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10" data-te-ripple-init data-te-ripple-color="light">
                                Call to action
                                
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div>

            </div>
        </div>
        <!-- 2 -->
        <div>
            <div>

            </div>
            <div>
                <h2>Apa itu</h2>
                <h1>StuBaby</h1>
                <h2>?</h2>
                <p>
                    StuBaby sendiri merupakan website yang menyediakan layanan untuk ibu dan anak dengan tujuan untuk melakukan pencegahan stunting khususnya untuk anak.
                    Layanan yang diberikan untuk pencegahan ini berupa dengan adanya fitur merekam jejak perkembangan dan pertumbuhan anak secara digital serta mudah dan juga dapat melakukan konsultasi secara langsung dengan ahli gizi dalam tujuan untuk menumbuhkan anak dengan giat dan mencegah dari stunting.
                </p>
            </div>
        </div>
        <!-- 3 -->
        <div>

        </div>
        <!-- 4 -->
        <div>

        </div>
        <!-- 5 -->
        <div>

        </div>
    </section>

    <footer>

    </footer>
</body>

</html>