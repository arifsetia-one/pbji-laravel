@extends('layout.main')
@section('content')
    <!-- presensi -->
    <section id="presensi" class="px-3 md:px-10 lg:px-14 py-4 bg-white">
        <div class="flex flex-col md:flex-row gap-3 justify-between">
            <div class="flex items-center gap-3">
                <img class="w-10 h-10 rounded-full bg-cover border-4 border-gray-200" src="../assets/logo-pbji.png"
                    alt="" />
                <div>
                    <a href="#" class="text-sm md:text-base font-semibold">Selamat Datang <span
                            class="text-based">Marco</span> !</a>
                    <p class="text-xs md:text-sm text-based-2">Kelengkapan profil kamu saat ini. Lengkapi profilmu
                        untuk unlock SkilReward di Pbji.</p>
                </div>
            </div>
            <button class="text-sm lg:text-base rounded-lg bg-based font-semibold text-white py-2 px-5">
                Presensi Atlit
            </button>
        </div>
    </section>

    <!-- card carousel -->
    <section class="px-0 md:px-10 lg:px-14 bg-gray-100 my-6" id="cardCarousel">
        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <a href="#">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="../assets/card-1.png"
                            class="absolute block w-[70%] lg:w-[85%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="..." />
                    </div>
                </a>
                <!-- Item 2 -->
                <a href="#">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="../assets/card-2.png"
                            class="absolute block w-[70%] lg:w-[85%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="..." />
                    </div>
                </a>
            </div>
            <!-- Slider controls -->
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
        </div>
    </section>

    <!-- card event -->
    <section class="px-14" id="cardEvent">
        <h3 class="text-base md:text-3xl text-based-2 font-semibold mb-10">
            Rekomendasi Event
        </h3>
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            <!-- card 1 -->
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <a href="#">
                    <img class="rounded-t-lg w-full object-cover" src="../assets/event-1.png" alt="" />
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
                    <img class="rounded-t-lg w-full object-cover" src="../assets/event-2.png" alt="" />
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
                    <img class="rounded-t-lg w-full object-cover" src="../assets/event-1.png" alt="" />
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

    <!-- media partner logos -->
    <section class="px-14 my-[100px]" id="mediaPartner">
        <div class="grid grid-cols-3 md:grid-cols-5">
            <img class="w-auto" src="{{ asset('assets') }}/logo/iji.png" alt="" />
            <img class="w-auto" src="{{ asset('assets') }}/logo/jjau.png" alt="" />
            <img class="w-auto" src="{{ asset('assets') }}/logo/ijf.png" alt="" />
            <img class="w-auto" src="{{ asset('assets') }}/logo/pbji.png" alt="" />
            <img class="w-auto" src="{{ asset('assets') }}/ logo / yusshika . png }}" alt="" />
        </div>
    </section>
    {{-- end of media partner logo --}}
@endsection
