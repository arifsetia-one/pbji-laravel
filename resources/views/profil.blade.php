@extends('layout.main')
@section('content')
    <!-- hero -->
    <section id="hero" class="bg-gradient-to-b from-gray-200">
        <div class="relative">
            <img class="hidden md:block absolute z-[-1] right-0 w-[300px]" src="../assets/foto/profileHero.png"
                alt="foto pbji" />
            <div class="hidden md:block absolute z-[-1] bg-based-2 left-0 top-0 h-[250px] w-10 rounded-r-[10px]"></div>
        </div>
        <div class="px-10 md:px-28 pt-5 md:pt-4 lg:pt-[60px] xl:pt-[110px]">
            <div class="text-2xl md:text-3xl lg:text-5xl font-extrabold w-2/3">
                Profile PBJI Daerah Istimewa Yogyakarta
            </div>
            <p class="mt-5 text-sm md:text-base font-semibold">Pengurus Besar Ju-jitsu Indonesia</p>
        </div>
    </section>

    <!-- about -->
    <section class="px-10 md:px-28 mt-[100px]" id="about">
        <h2 class="text-2xl font-bold">Tentang PBJI DIY</h2>
        <img class="w-[190px]" src="../assets/hr.png" alt="">
        <p class="text-sm md:text-base text-based-2 mt-5">Pengurus Besar Ju-Jitsu Indonesia (PBJI) Daerah Istimewa
            Yogyakarta resmi dilantik pada tanggal 10 Februari 2022.
            PBJI Daerah Istimewa Yogyakarta dipimpin oleh Marjono, S.H. dan M. Herbowo E. yang akan bekerja dalam masa bakti
            2022 - 2026.</p>
        <div class="mt-32 flex justify-end">
            <img class="w-[190px]" src="../assets/hr.png" alt="">
        </div>
        <p class="text-sm md:text-base text-based-2 mt-5 text-right">Pelantikan dilakukan oleh Sekretaris Jenderal PBJI
            Pusat mewakili Ketua Umum PBJI Pusat, Dr. Dedy Triharyanto, di Gedung Garuda RSPAU dr. Suhardi Hardjolukito Jl.
            Janti Yogyakarta, Lanud Adisucipto, Jl. Ringroad Timur, Karang Jambe, Banguntapan, Bantul, D.I. Yogyakarta.</p>
    </section>

    <!-- visi misi -->
    <section
        class="bg-based text-white p-10 px-3 md:p-28 mt-[100px] flex flex-col-reverse lg:flex-row gap-6 items-center justify-between"
        id="visiMisi">
        <div class="w-2/3">
            <h2 class="text-2xl font-bold">Visi</h2>
            <p class="text-sm md:text-base mt-5">Salah satu visi PBJI D.I. Yogyakarta adalah mencetak atlet dalam bentuk
                pembinaan atlet agar berprestasi dan mencari bibit - bibit atlet. Selain itu diharapkan bahwa Ju-Jitsu tidak
                hanya menjadi olahraga beladiri namun juga olahraga prestasi.</p>
            <h2 class="text-2xl font-bold mt-20">Misi</h2>
            <p class="text-sm md:text-base mt-5">Untuk mendukung tercetaknya atlet dari D.I. Yogyakarta secara terorganisir
                dan agar bisa berjalan dalam jangka waktu yang panjang, PBJI D.I. Yogyakarta membentuk kepengurusan di
                beberapa daerah di Yogyakarta.</p>
        </div>
        <div class="w-1/3">
            <img src="../assets/foto/visiMisi.png" alt="">
        </div>
    </section>
@endsection
