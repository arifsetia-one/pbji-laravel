<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- navbar -->
    <section id="navbar" class="hidden md:flex justify-between items-center p-3 bg-white shadow-md">
        <div class="flex items-center gap-1">
            <img class="w-11" src="../assets/logo/logo-pbji.png" alt="" />
            <div class="text-3xl font-extrabold font-sans">PBJI-DIY</div>
        </div>
        <div class="flex justify-between font-medium gap-6 lg:gap-10">
            <a class="text-sm lg:text-base" href="#">Beranda</a>
            <a class="text-sm lg:text-base" href="#">Profil</a>
            <a class="text-sm lg:text-base" href="#">Informasi PBJI</a>
            <a class="text-sm lg:text-base" href="#">Berita</a>
            <a class="text-sm lg:text-base" href="#">Acara</a>
            <a class="text-sm lg:text-base" href="#">Bantuan</a>
        </div>
        <div class="flex items-center gap-8">
            <div class="hidden lg:flex items-center gap-3">
                <img class="w-7 h-7 rounded-full bg-cover" src="../assets/icon/avatar.png" alt="" />
                <div class="font-medium text-sm md:text-base text-based-2">Marco</div>
            </div>
        </div>
    </section>
    <!-- mobile navbar -->
    <section id="mobileNavbar" class="block md:hidden shadow-md">
        <nav class="bg-white border-gray-200">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center">
                    <img src="../assets/logo/logo-pbji.png" class="h-8 mr-3" alt="Logo PBJI" />
                    <span class="self-center text-2xl font-extrabold whitespace-nowrap">PBJI DIY</span>
                </a>
                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="text-center font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white">
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded md:bg-transparent md:text-based md:p-0"
                                aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Profil</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Informasi
                                PBJI</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Berita</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Acara</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Bantuan</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Pemberitahuan</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">
                                <div class="flex items-center justify-center gap-3">
                                    <img class="w-7 h-7 rounded-full bg-cover" src="../assets/logo/logo-pbji.png"
                                        alt="" />
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    {{-- End of Navbar --}}

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

    <!-- footer -->
    <section class="px-14 py-20 bg-[#464646] text-white border-t-[15px] border-black" id="footer">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/3">
                <h5 class="text-base lg:text-xl font-semibold">PBJI DAERAH ISTIMEWA YOGYAKARTA</h5>
            </div>
            <div class="w-full md:w-2/3 flex flex-col md:flex-row gap-6 md:gap-0 justify-between">
                <div class="flex flex-col gap-3 md:gap-6">
                    <h5 class="text-xl font-semibold">Informasi Dojo</h5>
                    <p class="text-sm">Dojo RSPAU</p>
                    <p class="text-sm">Dojo Polres Kota</p>
                    <p class="text-sm">Dojo Polresta</p>
                    <p class="text-sm">Dojo Yusshika</p>
                    <p class="text-sm">Dojo SBI</p>
                    <p class="text-sm">Dojo Ngademke Ati</p>
                </div>

                <div class="flex flex-col gap-3 md:gap-6">
                    <h5 class="text-xl font-semibold">Menu</h5>
                    <p class="text-sm">Home</p>
                    <p class="text-sm">Profile</p>
                    <p class="text-sm">Informasi Atlit</p>
                    <p class="text-sm">User</p>
                </div>

                <div class="flex flex-col gap-3 md:gap-6">
                    <h5 class="text-xl font-semibold">Alamat Dan Kontak</h5>
                    <p class="text-sm">....................</p>
                    <p class="text-sm">....................</p>
                    <p class="text-sm">Email :</p>
                    <p class="text-sm">Telp :</p>
                </div>
            </div>
        </div>
        <hr class="w-full mt-10">
        <div class="mt-6 font-medium text-xl w-full flex flex-col gap-4 md:gap-0 md:flex-row justify-between">
            <div class="w-full md:w-1/3">
                <div class="text-sm">Copyright © 2023</div>
                <div class="text-sm">PBJI DAERAH ISTIMEWA YOGYAKARTA</div>
                <div class="text-sm">All Right Reserved</div>
            </div>
            <div class="w-full md:w-1/3">
                <h5 class="text-xl font-semibold">Ikuti Kami</h5>
                <div class="mt-6 flex gap-6">
                    <a href="https://www.facebook.com/">
                        <img class="w-8 md:w-auto" src="../assets/icon/icon-facebook.png" alt="" />
                    </a>
                    <a href="https://www.instagram.com/">
                        <img class="w-8 md:w-auto" src="../assets/icon/icon-instagram.png" alt="" />
                    </a>
                    <a href="https://www.youtube.com/">
                        <img class="w-8 md:w-auto" src="../assets/icon/icon-youtube.png" alt="" />
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end of footer --}}
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
