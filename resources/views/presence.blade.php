@extends('layout.main')
@section('content')
    {{-- card presence --}}
    <section class="md:flex md:flex-col">
        <div class="md:flex md:flex-1">
            <div class="md:flex md:flex-col bg-[#F1F1F1] md:w-96 md:h-screen p-4 gap-4">
                {{-- avatar --}}
                <div class="flex flex-col items-center pb-6">
                    <img class="w-24 h-24 mb-3 rounded-full shadow-lg"
                        src="https://static.vecteezy.com/system/resources/previews/002/002/403/original/man-with-beard-avatar-character-isolated-icon-free-vector.jpg"
                        alt="Bonnie image" />
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Marco Delcantadose</h5>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Atlet PBJI</span>
                </div>
                {{-- end of avatar --}}
                {{-- text detail --}}
                <div class="">
                    <div class="flex items-center gap-3">
                        <img class="w-7 h-7" src="../assets/icon/home.png" alt="" />
                        <div class="text-sm text-based">
                            Kel.Maguwoharjo, Kec.Depok, Kab.Sleman, Prov. DI Yogyakarta
                        </div>
                    </div>
                    <div class="mt-3 flex items-center gap-3">
                        <img class="w-7 h-7" src="../assets/icon/logout.png" alt="" />
                        <button class="text-sm text-based text-red-600">
                            Logout
                        </button>
                    </div>
                </div>
                {{-- end of text detail --}}
            </div>
            {{-- end of avatar --}}
            <div class="bg-white md:w-full ml-6 mr-6 mt-6">
                {{-- card --}}
                <div class="bg-red-600 rounded-md">
                    <div class=" text-white pt-6 pl-5 pr-5 pb-5">
                        <h2 class="text-2xl font-bold">Hello, Marco Delcantadose!</h2>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo exercitationem ea </p>
                        <div class="rounded-md bg-white text-black mt-4 pl-4 pt-4 pb-4 pr-4">
                            <h3 class="text-bold text-slate-700 mb-2">Jumlah presensi</h3>
                            <hr>
                            <h1 class="text-7xl font-bold text-yellow-400">80</h1>
                        </div>
                    </div>
                </div>
                {{-- end of card --}}
                {{-- input presensi --}}
                <div class="mt-7 pb-8">
                    <form>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 pl-10 text-md font-semibold text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Masukkan kode presensi!" required>
                            <button type="submit"
                                class="text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim</button>
                        </div>
                    </form>
                </div>
                {{-- end of input presensi --}}
            </div>
        </div>
    </section>
    {{-- end of card presence --}}
@endsection
