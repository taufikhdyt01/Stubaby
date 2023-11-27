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

<body class="font-poppins my-auto">
    <header class="bg-transparent">
        <nav class=" px-4 lg:px-6 py-2.5 ">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center">
                    <img src="{{ asset('/img/logo.svg') }}" class="mr-3 h-10 sm:h-9" alt="Stubaby Logo" />
                    <span class="self-center text-xl font-semibold text-primary whitespace-nowrap ">StuBaby</span>
                </a>
                <div class="flex items-center lg:order-2 space-x-6">
                    <a href="{{ route('choose') }}" class="text-primary hover:bg-primary font-semibold hover:text-white py-2 px-4 border-2 border-primary hover:border-transparent rounded">Daftar</a>
                    <a href="{{ route('login') }}" class="text-white bg-primary hover:bg-indigo-500 font-semibold hover:text-white py-2 px-4 border-2 border-primary hover:border-transparent rounded">Masuk</a>
                </div>

            </div>
        </nav>
    </header>

    <section>
        <!-- 1 -->
        <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('/img/bg_landing.svg'); height: 800px">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background: linear-gradient(0deg, rgba(55, 35, 52, 0.15) 0%, rgba(55, 35, 52, 0.15) 100%), linear-gradient(110deg, #F6D2FF 15.73%, rgba(217, 217, 217, 0.00) 87.48%);">
                <div class="flex h-full items-center ">
                    <div class="text-blek lg:ml-32 md:ml-16 text-left md:text-center">
                        <h2 class="lg:text-[42px] md:text-[38px] text-[30px] font-bold">Cegah Anak dari Stunting</h2>
                        <h2 class="mb-6 lg:text-[42px] md:text-[38px] text-[30px] font-bold">dengan <span class="text-primary">Mudah</span> dan <span class="text-primary">Terekam</span></h2>
                        <a href="#" class="bg-primary flex w-[250px] items-center rounded-lg px-7 pb-[8px] pt-[10px] font-bold text-neutral-50 transition duration-150 ease-in-out hover:border-purple-100 hover:bg-purple-500" >
                            Gabung Sekarang !
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 ml-3 ">
                                <path fill-rule="evenodd" d="M3.75 12a.75.75 0 01.75-.75h13.19l-5.47-5.47a.75.75 0 011.06-1.06l6.75 6.75a.75.75 0 010 1.06l-6.75 6.75a.75.75 0 11-1.06-1.06l5.47-5.47H4.5a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2 -->
        <div class="lg:flex md:flex lg:mx-32 md:mx-16 my-32 lg:space-x-20 md:space-x-10 ">
            <img class="w-[350px] lg:w-[500px] md:w-[400px]" src="{{ asset('/img/img_landing1.svg') }}" alt="">
            <div>
                <h2 class="lg:text-[38px] md:text-[34px] text-[30px] font-bold">Apa itu</h2>
                <h1 class="lg:text-[48px] md:text-[42px] text-[36px] font-bold text-primary">StuBaby <span class="text-[38px] font-bold text-blek">?</span></h1>
                <p class="text-[#34395E] text-[16px] mt-6 sm:text-center text-left md:text-left xl:text-left">
                    StuBaby sendiri merupakan website yang menyediakan layanan untuk ibu dan anak dengan tujuan untuk melakukan pencegahan stunting khususnya untuk anak.
                    Layanan yang diberikan untuk pencegahan ini berupa dengan adanya fitur merekam jejak perkembangan dan pertumbuhan anak secara digital serta mudah dan juga dapat melakukan konsultasi secara langsung dengan ahli gizi dalam tujuan untuk menumbuhkan anak dengan giat dan mencegah dari stunting.
                </p>
            </div>
        </div>

        <!-- 3 -->
        <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('/img/bg2_landing.svg'); height: 800px">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed ">
                <div class="lg:mx-32 md:mx-16 mt-32 mb-16 text-white">
                    <h2 class="font-bold lg:text-[38px] md:text-[34px] text-[30px] text-center justify-center mb-4">
                        Tersedia 3 fitur yang siap melayani Anda
                    </h2>
                    <p>
                        Fitur-fitur yang disediakan memiliki keunikan yang siap melayani ibu rumah tangga dengan tujuan untuk melihat perkembangan anak dan juga dapat melakukan konsultasi yang dapat memberikan perkembangan anak.
                    </p>
                </div>
                <div class="flex lg:flex-row md:flex-row align-center justify-center space-x-10 sm:overflow-x-auto">
                    <!-- 3.1 -->
                    <div class="bg-white rounded-xl w-[350px] py-8 px-16 ">
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
                        <img class="w-auto h-[165px] mx-auto" src="{{ asset('/img/img_artikel.svg') }}" alt="">
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
        <div class="lg:mx-32 md:mx-16 my-32">
            <h2 class="font-bold lg:text-[38px] md:text-[34px] text-[30px] text-center">
                Kenapa Harus <span class="text-primary">StuBaby</span> ?
            </h2>
            <div class="lg:flex md:flex  mt-[50px] lg:space-x-20 md:space-x-10">
                <img class="w-[350px] lg:w-[500px] md:w-[400px]" src="{{ asset('/img/img_landing2.svg') }}" alt="">
                <div class="lg:space-y-14 md:space-y-7 space-y-5">
                    <!-- 4.1 -->
                    <div class="flex space-x-8">
                        <div class="text-[40px] text-primary font-bold">
                            01
                        </div>
                        <div class="pl-3">
                            <h1 class="text-blek font-bold lg:text-[32px] md:text-[28px] text-[24px]">User Friendly</h1>
                            <p class="text-gray-500 lg:text-[18px] md:text-[16px] text-[14px]">StuBaby memberikan opsi yang mudah dalam memahami penggunaannya untuk ibu rumah tangga</p>
                        </div>
                    </div>

                    <!-- 4.2 -->
                    <div class="flex space-x-8">
                        <div class="text-[40px] text-primary font-bold">
                            02
                        </div>
                        <div>
                            <h1 class="text-blek font-bold lg:text-[32px] md:text-[28px] text-[24px]">Akses Gratis</h1>
                            <p class="text-gray-500 lg:text-[18px] md:text-[16px] text-[14px]">StuBaby memberikan akses yang dapat dengan mudah diakses dimana saja dan kapan saja untuk ibu rumah tangga</p>
                        </div>
                    </div>

                    <!-- 4.3 -->
                    <div class="flex space-x-8">
                        <div class="text-[40px] text-primary font-bold">
                            03
                        </div>
                        <div>
                            <h1 class="text-blek font-bold lg:text-[32px] md:text-[28px] text-[24px]">Sesuai Kebutuhan</h1>
                            <p class="text-gray-500 lg:text-[18px] md:text-[16px] text-[14px]">StuBaby memberikan layanan sesuai kebutuhan ibu rumah tangga dalam mengamati perkembangan anak</p>
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