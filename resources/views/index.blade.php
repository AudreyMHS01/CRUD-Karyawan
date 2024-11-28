<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dahsboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
</head>
<body >
    <div class="flex h-screen">
        @include('sidebar')
        <section id="konten" class="flex-grow mx-20 ml-[-158px] md:ml-[-190px] sm:mt-20 mt-14 md:block
        [&::-webkit-scrollbar]:w-2
        [&::-webkit-scrollbar-track]:bg-gray-100
        [&::-webkit-scrollbar-thumb]:bg-gray-300
        ">
            <div class="wrap-table mt-10 border border-gray-300 2xl:p-6 sm:p-4 p-2 shadow-lg shadow-slate-400 rounded-xl">
                <h1 class="2xl:text-6xl md:text-3xl sm:text-2xl text-xl font-bold my-4">Data Karyawan</h1>  
                @if(session('success'))
                    <div class="bg-green-200 text-green-700 2xl:p-8 sm:p-4 p-2 border-l-4 border-green-600 my-4 font-semibold 2xl:text-4xl sm:text-xl text-sm">
                        {{session('success')}}
                    </div>
                @endif
                <table class="table w-full rounded-md overflow-hidden">
                    <thead>
                        <tr class="border border-gray-300 text-gray-200 bg-blue-950">
                            <th class="p-2 2xl:text-4xl lg:text-xl md:text-lg sm:text-lg text-[10px]">No</th>
                            <th class="2xl:text-4xl lg:text-xl md:text-lg sm:text-lg text-[10px]">Nama</th>
                            <th class="2xl:text-4xl lg:text-xl md:text-lg sm:text-lg text-[10px]">No HP</th>
                            <th class="2xl:text-4xl lg:text-xl md:text-lg sm:text-lg text-[10px]">Alamat</th>
                            <th class="2xl:text-4xl lg:text-xl md:text-lg sm:text-lg text-[10px]">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawan as $no=>$item)
                            <tr class="border border-gray-300 text-center">
                                <th class="p-2 2xl:p-6 text-center 2xl:text-3xl md:text-lg sm:text-lg text-xs">{{$no+1}}</th>
                                <td class="text-center 2xl:text-3xl md:text-lg sm:text-lg text-xs">{{$item->nama}}</td>
                                <td class="text-center 2xl:text-3xl md:text-lg sm:text-lg text-xs">{{$item->no_hp}}</td>
                                <td class="text-center 2xl:text-3xl md:text-lg sm:text-lg text-xs">{{$item->alamat}}</td>
                                <td class="flex justify-center gap-2 my-1">
                                    <button class="hover:bg-green-700 bg-green-600 p-1 2xl:p-8 lg:rounded md:rounded sm:rounded rounded-full inline-flex items-center justify-center w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 text-white">
                                        <a href="{{route('karyawan.edit', $item->id)}}"><i class="fa-solid fa-pen-to-square 2xl:text-3xl lg:text-xl md:text-lg sm:text-sm text-xs"></i></a>
                                    </button>
                                    <form id="delete{{$item->id}}" action="{{route('karyawan.delete', $item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button class="hover:bg-red-700 bg-red-600 p-1 2xl:p-8 lg:rounded md:rounded sm:rounded rounded-full inline-flex items-center justify-center w-6 h-6 sm:w-8 sm:h-8 md:w-10 md:h-10 text-white" onclick="hapus({{$item->id}})"><i class="fa-solid fa-trash 2xl:text-3xl lg:text-xl md:text-lg sm:text-sm text-xs"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>

    <script>
        function hapus(id){
            if(confirm('Apakah yakin ingin menghapus data ini?')){
                document.getElementById('delete' + id).submit();
            }else{
                return false;
            }
        }
    </script>
</body>
</html>