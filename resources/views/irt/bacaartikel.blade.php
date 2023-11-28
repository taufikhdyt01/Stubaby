<!DOCTYPE html>
<html lang="en" x-data="data()">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Artikel</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <link rel="stylesheet" href="{{ asset('css/tailwind.output.css') }}" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- header -->
    @include('components.headerirt', ["activeLink" => "artikel"])

    <div class="container lg:flex md:flex lg:flex-row md:flex-row lg:space-x-6 md:space-x-3 my-12 mx-auto px-4 lg:px-14 xl:px-28 md:px-2">
        <!-- kiri (ini berdasarkan isi konten yow) -->
        <div class="basis-9/12 ">
            <!-- judul -->
            <h1 class="font-bold text-lg lg:text-4xl md:text-2xl ">
            {{ $x->judul }}
            </h1>
            <!-- pembuat dan tanggal terbuat -->
            <p class="font-semibold text-gray-400 mt-3">
                Ditinjau oleh <span class="text-purple-400">{{ \App\Models\User::find($x->user_id)->name }}</span> <br> <span> {{ $x->updated_at }}</span>
            </p>
            <!-- gambar artikel -->
            
<img src="{{asset('storage/'.$x->image)}}" alt="Image"class="w-[500px] my-6">
            <p><strong>Attachment:</strong> {{ $x->attachment }}</p>
            <!-- isi artikel -->
            <p class="font-medium text-blue-950">
            {{ $x->content }}
            </p>
        </div>
        <!-- kanan (kasih sama sj dengan artikel di home, tapi tampilkan maks 5 biji saja) -->
        <div class="basis-3/12 self-start sticky top-28">
            <h4 class="font-bold lg:text-2xl md:text-lg text-base">
                Artikel terbaru
            </h4>
            <hr class="h-px my-2 bg-gray-200 border-0">
            <div class="space-y-5">
                @include('components.artikelhome')
            </div>
        </div>
    </div>

    <!-- footer -->
    @include('components.footer')
</body>

</html>