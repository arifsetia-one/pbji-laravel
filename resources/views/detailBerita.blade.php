@extends('layout.detailBerita')
@section('content')
    {{-- detail berita --}}
    <!-- hero -->
    <section id="hero" class="bg-gradient-to-b from-gray-200 px-10 lg:px-28 py-5 md:py-4 lg:py-[60px] xl:py-[80px]">
        <div class="relative">
            <a href="#"
                class="hidden absolute top-[-150px] left-[-45px] md:top-[-130px] md:left-[-80px] z-30 lg:flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none">
                <span
                    class="inline-flex items-center justify-center w-5 h-5 md:w-10 md:h-10 rounded-full shadow-xl bg-black/30 group-hover:bg-black/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                    <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </span>
            </a>
            <div class="flex flex-col-reverse lg:flex-row gap-6">
                <div class="">
                    <div class="text-2xl md:text-3xl lg:text-5xl font-extrabold">
                        Kejurnas Jujitsu Indonesia, Surabaya Tempati Posisi Ketiga
                    </div>
                    <p class="mt-5 text-sm md:text-xl font-medium text-based-2">
                        Perkumpulan Jujitsu Indonesia menghelat kejuaraan nasional
                        (kejurnas) akhir bulan lalu. Kejuaraan ini berlangsung di Lapangan
                        Futsal Marier, Kabupaten Bandung, dan diikuti 80 jujitsuka.
                        <br /><br />
                        Kejurnas yang berlangsung sehari itu memperebutkan 47 medali emas,
                        45 medali perak, dan 42 medali perunggu.
                    </p>
                    <a href="#"
                        class="mt-5 inline-flex items-center px-3 py-2 justify-center text-sm font-medium text-center text-white bg-based rounded-md focus:ring-4 focus:outline-none">
                        Simpan Berita
                    </a>
                </div>
                <img class="rounded-2xl" src="../assets/event-1.png" alt="" />
            </div>
        </div>
    </section>

    <!-- content detail -->
    <section id="content">
        <div class="px-10 lg:px-28 py-5 md:py-[50px] flex flex-col md:flex-row">
            <!-- pengertian -->
            <div class="rounded-[10px] shadow-xl p-10 mt-6 w-full md:w-2/3">
                <div class="flex gap-3">
                    <img class="w-7 h-7" src="../assets/desc.png" alt="" />
                    <h3 class="text-2xl font-semibold">Deskripsi</h3>
                </div>
                <hr class="mt-4 border-based-2" />
                <p class="mt-5 text-sm md:text-base font-medium text-based-2">
                    Jujitsuka Bandung merajai turnamen. Mereka berhasil meraih juara
                    umum. Posisi kedua ditempati Depok (Jawa Barat). Dan, tempat ketiga
                    menjadi milik jujitsuka Surabaya (Jatim) yang diwakili Ryszard Ken
                    Sakti.
                    <br><br>
                    Mahasiswa Fakultas Hukum Universitas Islam Negeri Sunan Ampel
                    (UINSA) itu mendapatkan medali perak kelas fighting system 55 kg dan
                    medali perunggu kelas newaza 55 kg.
                    <br><br>
                    ”Atas prestasinya, Ryszard
                    mendapat apresiasi dari pihak kampus,” kata Soendjoto, ketua harian
                    Perkumpulan Jujitsu Indonesia.
                    <br><br>
                    Soendjoto menjelaskan, kejurnas ini
                    bertujuan untuk pembinaan atlet jujitsu Indonesia agar lebih siap
                    menghadapi level pertandingan yang lebih berat.
                </p>
            </div>
            <!-- detail acara -->
            <div class="rounded-[10px] shadow-xl p-10 mt-6 w-full md:w-1/3">
                <h3 class="text-2xl font-semibold">Detail Acara</h3>
                <hr class="mt-4 border-based-2" />
                <h4 class="mt-5 text-sm md:text-base font-medium">Tanggal</h4>
                <div class="mt-2 flex items-center gap-3">
                    <img class="w-7 h-7" src="../assets/date.png" alt="" />
                    <div class="text-sm text-based">Rabu, 03 Januari 2023</div>
                </div>

                <h4 class="mt-5 text-sm md:text-base font-medium">Waktu</h4>
                <div class="mt-2 flex items-center gap-3">
                    <img class="w-7 h-7" src="../assets/time.png" alt="" />
                    <div class="text-sm text-based">19.00 - 21.00 WIB</div>
                </div>

                <h4 class="mt-5 text-sm md:text-base font-medium">Tempat/Lokasi</h4>
                <div class="mt-2 flex items-start lg:items-center gap-3">
                    <img class="w-7 h-7" src="../assets/location.png" alt="" />
                    <div class="text-sm text-based">
                        Dojo
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end of detail berita --}}
@endsection
