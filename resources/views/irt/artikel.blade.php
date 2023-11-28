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

<body class="">
    <!-- Header -->
    @include('components.headerirt', ["activeLink" => "artikel"])

    <!-- Section -->
    <div class="container my-12 mx-auto px-4 lg:px-14 xl:px-28 md:px-2">
        <h1 class="text-center font-bold text-4xl text-primary mb-8">
            Artikel StuBaby
        </h1>
        <!-- filter -->

        <!-- also tolong filter artikelnya juga bang -->
        
        <!-- artikel2 -->
        <div class="flex flex-wrap -mx-1 lg:-mx-4">

            <!-- mungkin ini bisa dibuat jadi looping sebanyak 8x tetapi dengan berbeda artikel gituch -->
            @include('components.artikel')
    </div>

    <!-- Footer -->
    @include('components.footer')
</body>



</html>