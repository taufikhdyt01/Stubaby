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
    <header class="bg-transparent">
        <nav class=" px-4 lg:px-6 py-2.5 ">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('/img/logo.svg') }}" class="mr-3 h-10 sm:h-9" alt="Stubaby Logo" />
                    <span class="self-center text-xl font-semibold text-primary whitespace-nowrap ">StuBaby</span>
                </a>
                <div class="flex items-center lg:order-2 space-x-6">
                    <a href="{{ route('register') }}" class="text-primary hover:bg-primary font-semibold hover:text-white py-2 px-4 border-2 border-primary hover:border-transparent rounded">Daftar</a>
                    <a href="{{ route('login') }}" class="text-white bg-primary hover:bg-indigo-500 font-semibold hover:text-white py-2 px-4 border-2 border-primary hover:border-transparent rounded">Masuk</a>
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
        <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('/img/bg_landing.svg'); height: 800px">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background: linear-gradient(0deg, rgba(55, 35, 52, 0.15) 0%, rgba(55, 35, 52, 0.15) 100%), linear-gradient(110deg, #F6D2FF 15.73%, rgba(217, 217, 217, 0.00) 87.48%);">
                <div class="flex h-full items-center text-left">
                    <div class="text-blek ml-32">
                        <h2 class="text-[42px] font-bold">Cegah Anak dari Stunting</h2>
                        <h2 class="mb-6 text-[42px] font-bold">dengan <span class="text-primary">Mudah</span> dan <span class="text-primary">Terekam</span></h2>
                        <button type="button" class="bg-primary flex items-center rounded-lg px-7 pb-[8px] pt-[10px]  font-bold  leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 " data-te-ripple-init data-te-ripple-color="light">
                            Gabung Sekarang !
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-3 ">
                                <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2 -->
        <div class="flex mx-32 my-32 space-x-20">
            <img src="{{ asset('/img/img_landing1.svg') }}" alt="">
            <div>
                <h2 class="text-[38px] font-bold">Apa itu</h2>
                <h1 class="text-[48px] font-bold text-primary">StuBaby <span class="text-[38px] font-bold text-blek">?</span></h1>
                <p class="text-[#34395E] text-[16px] mt-6">
                    StuBaby sendiri merupakan website yang menyediakan layanan untuk ibu dan anak dengan tujuan untuk melakukan pencegahan stunting khususnya untuk anak.
                    Layanan yang diberikan untuk pencegahan ini berupa dengan adanya fitur merekam jejak perkembangan dan pertumbuhan anak secara digital serta mudah dan juga dapat melakukan konsultasi secara langsung dengan ahli gizi dalam tujuan untuk menumbuhkan anak dengan giat dan mencegah dari stunting.
                </p>
            </div>
        </div>

        <!-- 3 -->
        <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('/img/bg2_landing.svg'); height: 800px">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed ">
                <div class="mx-32 mt-32 mb-16 text-white">
                    <h2 class="font-bold text-[36px] text-center justify-center mb-4">
                        Tersedia 3 fitur yang siap melayani Anda
                    </h2>
                    <p>
                        Fitur-fitur yang disediakan memiliki keunikan yang siap melayani ibu rumah tangga dengan tujuan untuk melihat perkembangan anak dan juga dapat melakukan konsultasi yang dapat memberikan perkembangan anak.
                    </p>
                </div>
                <div class="flex align-center justify-center space-x-10">
                    <!-- 3.1 -->
                    <div class="bg-white rounded-xl w-[350px] py-8 px-16">
                        <img class="w-auto h-auto" src="{{ asset('/img/img_chat.svg') }}" alt="">
                        <h5 class="text-[24px] font-bold mt-6">
                            Konsultasi
                        </h5>
                        <h6 class="text-[14px] mt-3">
                            Ibu rumah tangga dapat melakukan konsultasi apa saja yang nantinya akan direspon dengan langsung oleh ahli gizi kami yang terpercaya
                        </h6>
                    </div>
                    <!-- 3.2 -->
                    <div class="bg-white rounded-xl w-[350px] py-8 px-16">
                        <img class="w-auto h-auto" src="{{ asset('/img/img_calendar.svg') }}" alt="">
                        <h5 class="text-[24px] font-bold mt-6">
                            DiaryKecil
                        </h5>
                        <h6 class="text-[14px] mt-3">
                            Ibu rumah tangga dapat mencatat pertumbuhan anak tiap harinya untuk melihat pertumbuhan yang terjadi pada anak
                        </h6>
                    </div>
                    <!-- 3.3 -->
                    <div class="bg-white rounded-xl w-[350px] py-8 px-16 ">
                        <img class="w-auto h-[165px]" src="{{ asset('/img/img_artikel.svg') }}" alt="">
                        <h5 class="text-[24px] font-bold mt-6">
                            Artikel
                        </h5>
                        <h6 class="text-[14px] mt-3">
                            Ibu rumah tangga dapat membaca berbagai macam artikel yang disediakan oleh ahli gizi kami
                        </h6>
                    </div>
                </div>
            </div>

        </div>

        <!-- 4 -->
        <div class="mx-32 my-32">
            <h2 class="font-bold text-[36px] text-center">
                Kenapa Harus <span class="text-primary">StuBaby</span> ?
            </h2>
            <div class="flex mt-[50px] space-x-20">
                <img src="{{ asset('/img/img_landing2.svg') }}" alt="">
                <div class="space-y-14">
                    <!-- 4.1 -->
                    <div class="flex space-x-8">
                        <div class="text-[40px] text-primary font-bold">
                            01
                        </div>
                        <div class="pl-3">
                            <h1 class="text-blek font-bold text-[32px]">User Friendly</h1>
                            <p class="text-gray-500 font-[16px]">StuBaby memberikan opsi yang mudah dalam memahami penggunaannya untuk ibu rumah tangga</p>
                        </div>
                    </div>

                    <!-- 4.2 -->
                    <div class="flex space-x-8">
                        <div class="text-[40px] text-primary font-bold">
                            02
                        </div>
                        <div>
                            <h1 class="text-blek font-bold text-[32px]">Akses Gratis</h1>
                            <p class="text-gray-500 font-[16px]">StuBaby memberikan akses yang dapat dengan mudah diakses dimana saja dan kapan saja untuk ibu rumah tangga</p>
                        </div>
                    </div>

                    <!-- 4.3 -->
                    <div class="flex space-x-8">
                        <div class="text-[40px] text-primary font-bold">
                            03
                        </div>
                        <div>
                            <h1 class="text-blek font-bold text-[32px]">Sesuai Kebutuhan</h1>
                            <p class="text-gray-500 font-[16px]">StuBaby memberikan layanan sesuai kebutuhan ibu rumah tangga dalam mengamati perkembangan anak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 5 -->
        <div>

        </div>
    </section>

    <footer>
        @include('components.footer')
    </footer>
</body>

</html>