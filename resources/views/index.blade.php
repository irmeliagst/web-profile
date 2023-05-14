@extends('layouts.main')
@section('title','index')
@section('content')
     <section id="main" class="h-screen text-center pt-20">
        <p class="text-gray-700 font-semibold text-xl dark:text-white">IG:_irmeliagst</p>
        <h1 class="text-blue-600 font-bold text-5xl py-10">Web<span class="text-blue-900 text-6xl">Profile</span><h1>
        <div class="px-32">
            <p class="text-center text-gray-800 dark:text-white">Halo, Namaku {{ $profile->nama }} 
            Saya seorang mahasiswa yang bersemangat dan berkomitmen dalam mengejar pendidikan tinggi. Saya saat ini sedang menempuh studi di Politeknik Negeri Jember dalam program Teknik Informatika. Saya memiliki minat yang kuat dalam design Ui/Ux. Selama masa studi saya, saya telah mengembangkan keterampilan seperti membuat design Ui/ux projek semester, serta aktif terlibat dalam kegiatan organisasi kampus. Saya memiliki semangat belajar yang tinggi, siap untuk menghadapi tantangan, dan berharap dapat berkontribusi secara positif dalam lingkungan akademik dan kemajuan dalam bidang saya.
           
            </p>
        </div>
        <div class="grid-flow-row md:flex md:justify-center px-16 py-16">
            <div class=" dark:bg-gray-800 w-full md:w-1/3 md:h-1/2 shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <img class="w-40 h-40 rounded-full mx-auto" src="{{ asset('assets/img/'.$profile->foto) }}" alt="">
                   <h1 class="text-gray-700 font-semibold text-2xl pt-2 dark:text-white">{{ $profile->nama }}</h1>
                   <p class="text-gray-700 text-lg pt-7 dark:text-white"> "Kuliah bukan hanya tentang mendapatkan gelar, tetapi juga tentang mengeksplorasi potensi diri, melampaui batasan, dan menjadi pribadi yang lebih baik. Saya siap untuk menghadapi tantangan dan tumbuh bersama dengan pengalaman kuliah."</p>
                    
            </div>
            <div class="md:m-0 m-auto grid grid-flow-row md:px-20">
                <div class=" dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 border-green-500 border-t-4">
                    <p class="text-gray-700 dark:text-white">Tempat, Tanggal Lahirku</p>
                    <h1 class="text-gray-700 font-semibold text-2xl pt-2 dark:text-white">{{ $profile->tempat_lahir }}, {{ \Carbon\Carbon::createFromFormat('Y-m-d',  $profile->tanggal_lahir)->translatedFormat('d F Y');  }}</h1>
                </div>
                <div class=" dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 border-indigo-500 border-t-4">
                    <p class="text-gray-700 dark:text-white">Emailku</p>
                    <h1 class="text-gray-700 font-semibold text-2xl pt-2 dark:text-white">{{ $profile->email }}</h1>
                   
                </div>
                <div class=" dark:bg-gray-800 shadow-md rounded px-8 pt-6 pb-8 mb-4 border-purple-500 border-t-4">
                    <p class="text-gray-700 dark:text-white">Hobiku</p>
                    <h1 class="text-gray-700 font-semibold text-2xl pt-2 dark:text-white">{{ $profile->hobi }}</h1>
                   
                </div>
            </div>
        </div>
    </section>
@endsection
   