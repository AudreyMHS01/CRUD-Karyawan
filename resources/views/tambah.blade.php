<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="flex justify-center align-middle h-screen bg-slate-100 2xl:pt-[13rem]">
    <section class="sm:p-4 p-2 2xl:p-8">
        <div class="text-center">
            <button class="bg-blue-950 hover:bg-blue-900 text-white p-2 2xl:p-6 2xl:text-4xl rounded-t-xl"><a href="{{route('index')}}">Kembali</a></button>
        </div>
        <div class="rounded-2xl 2xl:w-[60rem] md:w-96 w-72 bg-white shadow-lg pb-2">
            <div class="bg-blue-950 h-32 rounded-2xl flex justify-center text-center align-middle pt-10 2xl:pt-8">
                <h1 class="text-white tracking-wider font-semibold text-3xl 2xl:text-6xl">FORM ADD</h1>
            </div>
            <form action="{{route('karyawan.add')}}" method="POST" class="mx-8">
                @csrf
                <div class="mt-4">
                    <label class="2xl:text-4xl text-xl">Nama</label><br>
                    <input type="text" name="nama" class="border-b-2 border-gray-500 p-2 2xl:p-6 w-full 2xl:text-4xl"><br>
                </div>
                <div class="mt-4">
                    <label class="2xl:text-4xl text-xl">No HP</label><br>
                    <input type="number" name="no_hp" class="border-b-2 border-gray-500 p-2 2xl:p-6 w-full 2xl:text-4xl"><br>
                </div>
                <div class="mt-4">
                    <label class="2xl:text-4xl text-xl">Alamat</label><br>
                    <textarea name="alamat" id="alamat" cols="20" rows="4" class="border-b-2 border-gray-500 p-2 2xl:p-6 w-full 2xl:text-4xl"></textarea>
                </div>
                @if ($errors->any())
                    <div class="bg-red-200 text-red-700 2xl:p-8 sm:p-2 p-1 border-l-4 border-red-600 my-4 font-semibold 2xl:text-4xl  text-sm">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mt-2 text-center">
                    <button type="submit" class="border border-black p-4 2xl:p-6 2xl:px-16 px-10 2xl:text-4xl hover:bg-blue-900 bg-blue-950 text-white rounded-full">Submit</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>