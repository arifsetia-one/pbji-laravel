<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>

<body>
    {{-- navbar --}}
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
    {{-- mobile navbar --}}
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
    {{-- end of navbar --}}

    {{-- hero --}}
    <section id="hero">
        <div class="relative">
            <img class="absolute z-[-1] bg-cover" src="../assets/foto/hero.png" alt="" />
        </div>
        <div class="flex gap-3 md:gap-6 items-center pt-7 md:pt-20 px-4 md:px-14">
            <img class="w-10 h-10 md:w-28 md:h-28 lg:w-32 lg:h-32" src="../assets/logo/logo-pbji.png" alt="" />
            <div class="text-sm md:text-2xl lg:text-4xl text-white font-bold">
                <div>PBJI</div>
                <div>Pengurus besar ju-jitsu Indonesia</div>
            </div>
        </div>
        <div class="flex px-10 md:px-28 pt-5 md:pt-4 lg:pt-[60px] xl:pt-[110px] text-white items-center">
            <div class="text-base md:text-3xl lg:text-5xl font-semibold w-2/3">
                LOREM IPSUM LOREM IPSUM LOREM IPSUM
            </div>
            <img class="w-[50px] md:w-[200px] xl:w-[300px]" src="../assets/foto/card-hero.png" alt="" />
        </div>
    </section>
    {{-- end of hero --}}

    {{-- card carousel --}}
    <section class="px-0 md:px-10 lg:px-14 mt-[0px] hpB:mt-[60px] hpC:mt-[20%] md:mt-0 lg:mt-[150px] xl:mt-[250px]"
        id="cardCarousel">
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            {{-- carousel wrapper --}}
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <a href="#">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../assets/foto/card-1.png"
                            class="absolute block w-[70%] lg:w-[85%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="..." />
                    </div>
                </a>
                <!-- Item 2 -->
                <a href="#">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="../assets/foto/card-2.png"
                            class="absolute block w-[70%] lg:w-[85%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="..." />
                    </div>
                </a>
            </div>
            {{-- end of carousel wrapper --}}

            {{-- slider controls --}}
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-6 h-6 md:w-10 md:h-10 rounded-full bg-based/60 group-hover:bg-based/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-6 h-6 md:w-10 md:h-10 rounded-full bg-based/60 group-hover:bg-based/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                        </path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
            {{-- end of slider controls --}}
        </div>
    </section>
    {{-- end of card carousel --}}

    {{-- card event --}}
    <section class="px-14" id="cardEvent">
        <h3 class="text-base md:text-3xl text-based-2 font-semibold mb-10">
            Rekomendasi Event
        </h3>
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!-- card 1 -->
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg w-full object-cover" src="../assets/foto/event-1.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-1 text-base md:text-2xl font-semibold tracking-tight">
                            Kejurnas
                        </h5>
                    </a>
                    <p class="mb-4 text-sm md:text-base font-normal text-gray-700">
                        Yogyakarta, 03 September 2022
                    </p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 w-full justify-center text-sm font-medium text-center text-white bg-based rounded-md focus:ring-4 focus:outline-none">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
            <!-- card 2 -->
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg w-full object-cover" src="../assets/foto/event-2.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-1 text-base md:text-2xl font-semibold tracking-tight">
                            Kejurnas
                        </h5>
                    </a>
                    <p class="mb-4 text-sm md:text-base font-normal text-gray-700">
                        Yogyakarta, 03 September 2022
                    </p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 w-full justify-center text-sm font-medium text-center text-white bg-based rounded-md focus:ring-4 focus:outline-none">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
            <!-- card 3 -->
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg w-full object-cover" src="../assets/foto/event-1.png" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-1 text-base md:text-2xl font-semibold tracking-tight">
                            Kejurnas
                        </h5>
                    </a>
                    <p class="mb-4 text-sm md:text-base font-normal text-gray-700">
                        Yogyakarta, 03 September 2022
                    </p>
                    <a href="#"
                        class="inline-flex items-center px-3 py-2 w-full justify-center text-sm font-medium text-center text-white bg-based rounded-md focus:ring-4 focus:outline-none">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- end of card event --}}

    {{-- media partner logos --}}
    <section class="px-14 my-[100px]" id="mediaPartner">
        <div class="grid grid-cols-3 md:grid-cols-5">
            <img class="w-auto" src="../assets/iji.png" alt="" />
            <img class="w-auto" src="../assets/jjau.png" alt="" />
            <img class="w-auto" src="../assets/ijf.png" alt="" />
            <img class="w-auto" src="../assets/pbji.png" alt="" />
            <img class="w-auto" src="../assets/yusshika.png" alt="" />
        </div>
    </section>
    {{-- end of media partner logos --}}

    {{-- footer --}}
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
