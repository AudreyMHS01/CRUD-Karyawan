<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <style>
        body{
            overflow-x: hidden;
            max-height: 100vh;
        }
        /* Tambahkan beberapa gaya dasar untuk sidebar */
        #sidebar {
            transition: transform 0.3s ease;
            transform: translateX(-100%); /* Sidebar tersembunyi secara default */
        }
        #sidebar.open {
            transform: translateX(0); /* Sidebar terbuka */
        }
        nav {
            transition: margin-left 0.3s ease;
        }
        nav.sidebar-open{
            margin-left: 255px; /* Memberi ruang untuk sidebar ketika terbuka */
        }
        #konten.sidebar-open{
            margin-left: 80px;
            overflow-y: scroll;
        }
    </style>
</head>
<body>
    <nav class="w-full bg-blue-200 py-4 2xl:py-8 px-8 2xl:px-16 flex fixed z-10">
        <i class="fa-solid fa-bars mt-0.5 mr-4 text-xl sm:text-2xl 2xl:text-6xl cursor-pointer" id="toggle" onclick="toggleSidebar()"></i>
        <h2 class="2xl:text-6xl sm:text-2xl text-xl text-black font-semibold">KARYAWAN</h2>
    </nav>
    <section id="sidebar" class="w-64 h-screen bg-blue-950 text-white px-8 2xl:px-14 py-6 2xl:py-10 flex flex-col">
        <div class="flex-grow">
            <div class="flex border-b-2 border-white pb-2">
                <i class="fa-brands fa-pagelines text-3xl mr-2"></i>
                <h1 class="2xl:text-4xl sm:text-2xl text-xl">Sidebar</h1>
            </div>
            <!-- Tambahkan konten sidebar di sini -->
            <ul class="mt-12">
                <li class="my-2 p-2 hover:bg-white hover:text-blue-950 hover:rounded-lg"><a href="{{route('dashboard')}}" class=" 2xl:text-2xl md:text-lg text-md">Dahsboard</a></li>
                <li class="my-2 p-2 hover:bg-white hover:text-blue-950 hover:rounded-lg"><a href="{{route('index')}}" class=" 2xl:text-2xl md:text-lg text-md">Data Karyawan</a></li>
                <li class="my-2 p-2 hover:bg-white hover:text-blue-950 hover:rounded-lg"><a href="{{route('karyawan.tambah')}}" class="2xl:text-2xl md:text-lg text-md">Tambah Karyawan</a></li>
            </ul>
        </div>
        <button class="bg-red-600 px-4 py-2 rounded-lg mt-auto">Logout</button>
    </section>

    <script type="text/javascript">
        function toggleSidebar() {
            const sidebar = document.querySelector('#sidebar');
            const nav = document.querySelector('nav');
            const konten = document.querySelector('#konten');
            sidebar.classList.toggle('open');
            nav.classList.toggle('sidebar-open');
            konten.classList.toggle('sidebar-open');
            konten.classList.toggle('hidden');
        }
    </script>
</body>
</html>