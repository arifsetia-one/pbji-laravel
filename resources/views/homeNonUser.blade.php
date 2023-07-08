@extends('layout.main')
@section('content')
    {{-- hero --}}
    <section id="hero">
        <div class="relative">
            <img class="absolute z-[-1] bg-cover w-full brightness-75" src="../assets/foto/hero.png" alt="" />
        </div>
        <div class="flex gap-3 md:gap-6 items-center pt-7 md:pt-20 px-4 md:px-14">
            <img class="w-10 h-10 md:w-28 md:h-28 lg:w-32 lg:h-32" src="../assets/logo/logo-pbji.png" alt="" />
            <div class="italic">
                <div class="sm:text-8xl text-3xl text-white font-bold">PBJI</div>
                <div class="sm:text-3xl font-semibold text-white">Pengurus besar ju-jitsu Indonesia</div>
            </div>
        </div>
        <div class="container mx-auto mt-40 sm:mt-10 md:mt-80 lg:mt-10 felx items-center grid grid-cols-2">
            <h1
                class="text-black font-semibold font-sans sm:text-white- md:text-black lg:text-white text-2xl sm:text-6xl  ml-14">
                Never give up<br> on your dreams
            </h1>
            <img src="../assets/foto/card-hero.png"
                class="place-self-center drop-shadow-2xl md:mt-10 lg:mt-10 md:ml-32 scale-75 sm:scale-75 sm:hover:scale-90 lg:scale-110 lg:hover:scale-125 transition-all duration-300">
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
                            class="absolute block w-[80%] lg:w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="pbji" />
                    </div>
                </a>
                <!-- Item 2 -->
                <a href="#">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="../assets/foto/card-2.png"
                            class="absolute block w-[80%] lg:w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="pbji" />
                    </div>
                </a>
            </div>
            {{-- end of carousel wrapper --}}

            {{-- slider controls --}}
            <button type="button"
                class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-6 h-6 md:w-10 md:h-10 rounded-full bg-based/60 group-hover:bg-based/50 group-focus:ring-4 group-focus:ring-gray-600 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
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
                    class="inline-flex items-center justify-center w-6 h-6 md:w-10 md:h-10 rounded-full bg-based/60 group-hover:bg-based/50 group-focus:ring-4 group-focus:ring-gray-600 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
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
        <h3 class="font-bold text-2xl sm:text-3xl  md:text-3xl md:mt-10 mb-4 md:ml-16 text-slate-700">
            Rekomendasi Event
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center">
            <!-- card 1 -->
            <div
                class="max-w-full rounded overflow-hidden shadow-lg bg-white mt-4 justify-end hover:scale-105 transition-all duration-300">
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
                    <a href="{{ route('detailBerita') }}"
                        class="inline-flex items-center px-3 py-2 w-full justify-center text-sm font-medium text-center bg-red-700 text-white bg-based rounded-md focus:ring-4 focus:outline-none">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
            <!-- card 2 -->
            <div
                class="max-w-full rounded overflow-hidden shadow-lg bg-white mt-4 justify-end hover:scale-105 transition-all duration-300">
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
                        class="inline-flex items-center px-3 py-2 w-full justify-center text-sm font-medium text-center bg-red-700 text-white bg-based rounded-md focus:ring-4 focus:outline-none">
                        Lihat Selengkapnya
                    </a>
                </div>
            </div>
            <!-- card 3 -->
            <div
                class="max-w-full rounded overflow-hidden shadow-lg bg-white mt-4 justify-end hover:scale-105 transition-all duration-300">
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
                        class="inline-flex items-center px-3 py-2 w-full justify-center text-sm font-medium text-center bg-red-700 text-white bg-based rounded-md focus:ring-4 focus:outline-none">
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
            <img class="w-auto" src="{{ asset('assets') }}/logo/iji.png" alt="" />
            <img class="w-auto" src="{{ asset('assets') }}/logo/jjau.png" alt="" />
            <img class="w-auto" src="{{ asset('assets') }}/logo/ijf.png" alt="" />
            <img class="w-auto" src="{{ asset('assets') }}/logo/pbji.png" alt="" />
            <img class="w-auto" src="{{ asset('assets') }}/logo/yusshika.png" alt="" />
        </div>
    </section>
    {{-- end of media partner logos --}}
@endsection
