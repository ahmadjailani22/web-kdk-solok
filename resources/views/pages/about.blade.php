@extends('layouts.app')

@section('title', 'Tentang Kami - Klinik Desain & Kemasan UMKM')
@section('meta_description', 'Kenali lebih dekat sejarah, visi misi, dan tim di balik Klinik Desain & Kemasan UMKM.')

@section('content')

    <section class="bg-blue-800 text-white py-16 text-center">
        <h1 class="text-3xl md:text-4xl font-bold">Tentang Kami</h1>
    </section>

    <section class="max-w-4xl mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
            <div>
                <h2 class="text-2xl font-bold mb-4">Sejarah Perusahaan</h2>
                <p class="text-gray-600 leading-relaxed">
                    Tulis sejarah singkat perusahaan di sini — kapan berdiri, latar belakang, dan
                    perjalanan bisnis hingga saat ini.
                </p>
            </div>
            <div class="bg-gray-100 rounded-xl h-64 flex items-center justify-center text-gray-400">
                Foto/Gambar Perusahaan
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <div class="border border-gray-200 rounded-xl p-6">
                <h3 class="font-semibold text-lg mb-2">Visi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Tulis visi perusahaan di sini.
                </p>
            </div>
            <div class="border border-gray-200 rounded-xl p-6">
                <h3 class="font-semibold text-lg mb-2">Misi</h3>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Tulis misi perusahaan di sini, bisa dalam bentuk poin-poin.
                </p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold mb-6 text-center">Tim Kami</h2>
            <div class="grid md:grid-cols-4 gap-6">
                @for ($i = 0; $i < 4; $i++)
                    <div class="text-center">
                        <div class="w-24 h-24 mx-auto bg-gray-200 rounded-full mb-3"></div>
                        <p class="font-medium text-sm">Nama Anggota</p>
                        <p class="text-gray-400 text-xs">Jabatan</p>
                    </div>
                @endfor
            </div>
        </div>
    </section>

@endsection