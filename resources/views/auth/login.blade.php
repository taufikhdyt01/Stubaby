<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Masuk StuBaby</title>
</head>

<body class="font-poppins">
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
                    
                    <!-- Session Status -->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <div class="w-full bg-white rounded-lg shadow  sm:max-w-md xl:p-0">
                        <div class="p-6 space-y-4 ">
                            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl text-center">
                                Masuk
                            </h1>
                            <form method="POST" class="space-y-4 md:space-y-6" action="{{ route('login') }}">
                            @csrf
                                 <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" class="block mb-2 text-sm font-medium text-gray-900 " :value="__('Email')" />
                                    <x-text-input id="email" placeholder="Masukkan Email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div>
                                    <x-input-label for="password" class="block mb-2 text-sm font-medium text-gray-900 " :value="__('Kata Sandi')"/>
                                    <x-text-input type="password" name="password" id="password" placeholder="Masukkan Kata Sandi" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="current-password"/>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <label for="remember_me" class="inline-flex items-center">
                                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                                <span class="ml-2 text-sm text-gray-600">{{ __('Ingat saya') }}</span>
                                            </label>
                                        </div>
                                        
                                    </div>
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-sm font-medium text-primary hover:underline ">{{ __('Lupa Sandi') }}</a>
                                    @endif
                                </div>
                                <button type="submit" class="w-full text-white bg-indigo-500 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">{{ __('Masuk') }}</button>
                                <p class="text-sm font-light text-gray-500 text-center">
                                    Belum punya akun? <a href="{{ route('register') }}" class="font-medium text-primary hover:underline">Daftar Akun</a>
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