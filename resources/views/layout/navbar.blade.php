{{-- navbar --}}
<section id="navbar" class="hidden md:flex justify-between items-center p-3 bg-white shadow-md">
    <div class="flex items-center gap-1">
        <img class="w-11" src="../assets/logo/logo-pbji.png" alt="" />
        <div class="text-3xl font-extrabold font-sans">PBJI-DIY</div>
    </div>
    <div class="flex justify-between font-medium gap-6 lg:gap-10">
        <a class="text-sm lg:text-base" href="{{ route('homeNonUser') }}">Beranda</a>
        <a class="text-sm lg:text-base" href="{{ route('presence') }}">Profil</a>
        <a class="text-sm lg:text-base" href="{{ route('profil') }}">Informasi PBJI</a>
        <a class="text-sm lg:text-base" href="{{ route('homeUser') }}">Berita</a>
        {{-- <a class="text-sm lg:text-base" href="{{ route('login') }}">Bantuan</a> --}}
    </div>
    <div class="flex items-center gap-8">
        <button
            class="bg-[#eb1728] py-1 px-4 md:py-2 md:px-6 rounded-[8px] text-sm hover:scale-105 transition-all duration-300"><a
                class="text-white text-1xl" target="_blank" href="{{ route('login') }}">Masuk</a></button>
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
                        <a href="{{ route('homeNonUser') }}"
                            class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded md:bg-transparent md:text-based md:p-0"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('presence') }}"
                            class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Profil</a>
                    </li>
                    <li>
                        <a href="{{ route('profil') }}"
                            class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Informasi
                            PBJI</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"
                            class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Berita</a>
                    </li>
                    {{-- <li>
                        <a href="{{ route('homeUser') }}"
                            class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Acara</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}"
                            class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Bantuan</a>
                    </li>
                    <li>
                        <a href="{{ route('homeNonUser') }}"
                            class="block py-2 pl-3 pr-4 text-sm text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-based md:p-0">Pemberitahuan</a>
                    </li> --}}
                    <li>
                        <button
                            class="bg-[#eb1728] py-1 px-4 md:py-2 md:px-6 rounded-[8px] text-sm hover:scale-105 transition-all duration-300"><a
                                class="text-white text-1xl" href="{{ route('login') }}">Masuk</a></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</section>
{{-- End of Navbar --}}
