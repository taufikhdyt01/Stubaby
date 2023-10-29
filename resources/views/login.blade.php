<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Masuk StuBaby</title>
</head>

<body class="font-poppins">
    <header>

        <!-- <nav class="bg-[#FCFCFC]  fixed w-full z-20 top-0 left-0 border-b border-gray-200 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center">
                    <span class="self-center text-2xl text-[#4B47FF] font-semibold whitespace-nowrap">StuBaby</span>
                </a>
                <div class="flex md:order-2">
                    <button type="button" class="text-white bg-[#4B47FF] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 ">Masuk</button>
                    <button type="button" class="text-[#4B47FF] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 ">Daftar</button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white  ">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#4B47FF] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Home</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#4B47FF] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">DiaryKecil</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#4B47FF] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Konsultasi</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-[#4B47FF] rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 ">Artikel</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->

    </header>

    <section>
        <section class="bg-[#FCFCFC]">
            <div class="grid grid-cols-2">
                <div class="">
                    <img src="{{ asset('/img/img_masuk.svg') }}" alt="">
                </div>
                <div class="flex flex-col items-center justify-center px-6 py-8  lg:py-0">
                    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-primary ">
                        <img class="w-8 h-8 mr-2" src="{{ asset('/img/logo.svg') }}" alt="logo">
                        StuBaby
                    </a>
                    <div class="w-full bg-white rounded-lg shadow  sm:max-w-md xl:p-0">
                        <div class="p-6 space-y-4 ">
                            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                                Masuk
                            </h1>
                            <form class="space-y-4 md:space-y-6" action="#">
                                <div>
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Masukkan Email" required="">
                                </div>
                                <div>
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Kata Sandi</label>
                                    <input type="password" name="password" id="password" placeholder="Masukkan kata sandi" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 " required="">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="remember" class="text-subtext">Ingat saya</label>
                                        </div>
                                    </div>
                                    <a href="#" class="text-sm font-medium text-primary hover:underline ">Lupa kata sandi?</a>
                                </div>
                                <button type="submit" class="w-full text-white bg-primary hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Masuk</button>
                                <p class="text-sm font-light text-gray-500 text-center">
                                    Belum punya akun? <a href="#" class="font-medium text-primary hover:underline ">Daftar Akun</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

</body>

</html>