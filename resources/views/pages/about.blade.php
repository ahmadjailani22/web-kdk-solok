@extends('layouts.app')

@section('title', 'Tentang Kami - Klinik Desain & Kemasan')
@section('meta_description', 'Kenali lebih dekat sejarah, visi misi, dan tim di balik Klinik Desain & Kemasan UMKM.')

@section('content')

    <div class="max-w-6xl mx-auto px-4 py-14">

        <div class="mb-10 md:mb-14">
            <h1 class="text-2xl font-bold tracking-tight text-neutral-800 md:text-4xl">
                Tentang <span class="text-orange-500">Kami</span>
            </h1>
        </div>

        <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
            <div>
                <h2 class="text-2xl font-bold text-neutral-800 mb-4">Sejarah Kami</h2>
                <p class="text-neutral-600 leading-relaxed">
                    Tulis sejarah singkat perusahaan di sini — kapan berdiri, latar belakang, dan
                    perjalanan bisnis hingga saat ini.
                </p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg h-64">
                <img src="{{ asset('images/about.jpg') }}" alt="Klinik Desain & Kemasan" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-16">
            <div class="rounded-2xl bg-neutral-100 p-6">
                <h3 class="font-bold text-lg text-neutral-800 mb-2">Visi</h3>
                <p class="text-neutral-600 text-sm leading-relaxed">
                    Tulis visi perusahaan di sini.
                </p>
            </div>
            <div class="rounded-2xl bg-neutral-100 p-6">
                <h3 class="font-bold text-lg text-neutral-800 mb-2">Misi</h3>
                <p class="text-neutral-600 text-sm leading-relaxed">
                    Tulis misi perusahaan di sini, bisa dalam bentuk poin-poin.
                </p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-neutral-800 mb-6 text-center">Tim Kami</h2>
            <div class="grid md:grid-cols-4 gap-6">
                @for ($i = 0; $i < 4; $i++)
                    <div class="text-center">
                        <div class="w-24 h-24 mx-auto bg-neutral-200 rounded-full mb-3"></div>
                        <p class="font-bold text-sm text-neutral-800">Nama Anggota</p>
                        <p class="text-neutral-500 text-xs">Jabatan</p>
                    </div>
                @endfor
            </div>
        </div>
    </div>

@endsection