<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
    {{-- End of Navbar --}}

    {{-- form login --}}
    <div class="flex items-center justify-center min-h-screen bg-gray-100 pr-4 pl-4">
        <div class="px-10 py-8 text-left bg-white shadow-lg">
            <h3 class="text-2xl mt-4 font-bold text-center">Masuk ke Akun</h3>
            <form action="">
                <div class="mt-4 sm:w-96">
                    <div>
                        <label class="block" for="email">Username<label>
                                <input type="text" placeholder="Username"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-red-600">
                    </div>
                    <div class="mt-4">
                        <label class="block">Password<label>
                                <input type="password" placeholder="Password"
                                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-red-600">
                    </div>
                    <a href="#"
                        class="flex justify-center text-sm mt-4 font-medium text-red-600 hover:underline">Login
                        sebagai admin</a>
                    <div class="flex items-baseline justify-between">
                        <button
                            class="w-full px-6 py-2  mt-4 text-white bg-red-600 rounded-lg hover:bg-red-900">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- end of form login --}}
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>

</html>
