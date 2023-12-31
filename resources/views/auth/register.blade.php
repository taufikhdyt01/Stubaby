<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Daftar StuBaby</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body class="font-poppins">
    <section class="bg-gray-50">
        <div class="grid lg:grid-cols-2 md:grid-cols-2">
            <div class="flex flex-col items-center justify-center px-6 py-8 md:h-screen lg:py-0">
                <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-primary ">
                    <img class="w-8 h-8 mr-2" src="{{ asset('/img/logo.svg') }}" alt="logo">
                    StuBaby
                </a>
                <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 ">
                    <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-primary md:text-2xl text-center">
                            Daftar
                        </h1>
                        <form method="POST" class="space-y-4 md:space-y-6" action="{{ route('register', ['role' => $role]) }}">
                            @csrf
                            <input type="hidden" name="role" value="{{ $role }}">
                            <div>
                                <x-input-label for="name" class="block mb-2 text-sm font-medium text-gray-900" :value="__('Nama')"/>
                                <x-text-input  type="name" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Masukkan nama Anda" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="email" class="block mb-2 text-sm font-medium text-gray-900" :value="__('Email')" />
                                <x-text-input type="email" name="email" id="email" placeholder="email@gmail.com" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="password" class="block mb-2 text-sm font-medium text-gray-900 "  :value="__('Kata Sandi')"/>
                                <x-text-input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="new-password"/>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-900" :value="__('Konfirmasi Password')" />
                                <x-text-input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 " required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="terms" class="font-light text-gray-500 ">Saya setuju dengan <a class="font-medium text-primary hover:underline " href="#">Syarat dan Ketentuan</a></label>
                                </div>
                            </div>
                            <button type="submit" class="w-full text-white bg-indigo-500 hover:bg-primary-400 focus:ring-4 focus:outline-none focus:ring-primary font-medium rounded-lg text-sm px-5 py-2.5 text-center ">{{ __('Daftar Akun Baru') }}</button>
                            <p class="text-sm font-light text-gray-500 text-center">
                                Sudah punya akun? <a href="{{ route('login') }}" class="font-medium text-primary hover:underline">{{ __('Masuk Akun') }}</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block md:block">
                <img src="{{ asset('/img/img_daftar.svg') }}" alt="">
            </div>
        </div>
    </section>
</body>

</html>