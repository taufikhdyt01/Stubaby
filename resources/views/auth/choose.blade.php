<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>StuBaby</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body class="font-poppins">
    <a href="#">
        <img src="{{ asset('/img/logo_2.svg') }}" class="mx-auto mt-10" alt="">
    </a>

    <div class="flex flex-col h-[550px] items-center justify-center text-center">
        <h2 class="text-2xl font-semibold mb-10">
            Anda mendaftar sebagai apa?
        </h2>
        <div class="flex align-center justify-center space-x-10">
            <!-- 1 -->
            <a href="#">
                <div class="bg-gradient-to-t from-indigo-400 to-indigo-300 rounded-2xl w-[350px] py-8 px-16 drop-shadow-md hover:from-indigo-500 hover:to-indigo-400 ">
                    <img class="w-auto h-auto" src="{{ asset('/img/img_chooseirt.svg') }}" alt="">
                    <h5 class="text-[23px] font-bold mt-6 drop-shadow-md text-white">
                        Ibu Rumah Tangga
                    </h5>
                </div>
            </a>

            <!-- 2 -->
            <a href="#">
                <div class="bg-gradient-to-t from-emerald-400 to-green-300 rounded-2xl w-[350px] py-8 px-16 drop-shadow-md hover:from-emerald-500 hover:to-green-500 ">
                    <img class="w-auto h-auto" src="{{ asset('/img/img_chooseahligizi.svg') }}" alt="">
                    <h5 class="text-[23px] font-bold mt-6 drop-shadow-md text-white">
                        Ahli Gizi
                    </h5>
                </div>
            </a>
        </div>

    </div>
</body>

</html>