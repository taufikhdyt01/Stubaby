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
                Resep bergizi dan hemat untuk anak usia 1 bulan hingga 6 bulan
            </h1>
            <!-- pembuat dan tanggal terbuat -->
            <p class="font-semibold text-gray-400 mt-3">
                Ditinjau oleh <span class="text-purple-400">dr. Rizal Fadli</span> <span>3 November 2023</span>
            </p>
            <!-- gambar artikel -->
            <img src="{{ asset('/img/cthilustrasiartikel.svg') }}" class="w-[500px] my-6" alt="">

            <!-- isi artikel -->
            <p class="font-medium text-blue-950">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididu
                nt ut labore et dolore magna aliqua. Massa tempor nec feugiat nisl pretium fusce id velit. Risus sed vulputate odio ut. Odio ut sem nulla pharetra diam sit amet nisl suscipit. Diam donec adipiscing tristique risus nec feugiat in fermentum posuere. Tristique senectus et netus et malesuada fames ac turpis egestas. Sed faucibus turpis in eu mi bibendum. Facilisis gravida neque convallis a cras semper. Sollicitudin ac orci phasellus egestas tellus rutrum. Turpis egestas pretium aenean pharetra. Integer feugiat scelerisque varius morbi enim nunc faucibus a pellentesque. Et netus et malesuada fames ac turpis egestas integer eget. Pellentesque elit eget gravida cum sociis natoque penatibus et magnis. Tincidunt nunc pulvinar sapien et.

                Sed vulputate mi sit amet mauris commodo quis. Amet mattis vulputate enim nulla aliquet.
                 Non enim praesent elementum facilisis leo vel fringilla est. Felis bibendum ut tristique et egestas quis. Velit dignissim sodales ut eu sem integer vitae justo. Orci a scelerisque purus semper eget duis at. Enim neque volutpat ac tincidunt vitae semper quis. Suscipit adipiscing bibendum est ultricies integer quis. Quis viverra nibh cras pulvinar. Auctor eu augue ut lectus arcu bibendum at varius vel. Viverra maecenas accumsan lacus vel facilisis volutpat est velit egestas. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae. Adipiscing elit ut aliquam purus sit. Nec sagittis aliquam malesuada bibendum arcu. Facilisi etiam dignissim diam quis enim lobortis scelerisque fermentum dui. Sagittis nisl rhoncus mattis rhoncus urna.

                Ut enim blandit volutpat maecenas volutpat blandit aliquam etiam erat. Morbi tincidunt
                 augue interdum velit. Sapien et ligula ullamcorper malesuada proin libero. Vitae congue mauris rhoncus aenean vel elit scelerisque mauris pellentesque. Velit laoreet id donec ultrices tincidunt arcu non sodales. Eget arcu dictum varius duis. Nisl pretium fusce id velit ut tortor pretium. Consequat mauris nunc congue nisi. Eget gravida cum sociis natoque penatibus. Lacus luctus accumsan tortor posuere ac. Morbi tincidunt ornare massa eget egestas purus. Nisl nisi scelerisque eu ultrices vitae auctor. Nisl rhoncus mattis rhoncus urna neque viverra justo. Ligula ullamcorper malesuada proin libero nunc consequat interdum varius. Diam maecenas sed enim ut sem. Vitae tempus quam pellentesque nec nam aliquam sem. At quis risus sed vulputate.
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
                @include('components.artikelhome')
                @include('components.artikelhome')
                @include('components.artikelhome')
                @include('components.artikelhome')
            </div>
        </div>
    </div>

    <!-- footer -->
    @include('components.footer')
</body>

</html>