<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex h-screen" >
        @include('sidebar')
        <section class="flex-grow" id="konten">
            <h1 class="mt-20 2xl:text-6xl md:text-4xl text-2xl font-semibold">Ini Dashboard</h1>
        </section>

    </div>
</body>
</html>