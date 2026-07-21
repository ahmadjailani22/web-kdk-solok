@extends('layouts.app')

@section('title', 'Layanan Kami - Klinik Desain & Kemasan UMKM')
@section('meta_description', 'Berbagai layanan profesional yang kami sediakan untuk mendukung kebutuhan bisnis Anda.')

@section('content')

    <section class="bg-blue-800 text-white py-16 text-center">
        <h1 class="text-3xl md:text-4xl font-bold">Layanan Kami</h1>
        <p class="text-blue-100 mt-2">Berbagai solusi profesional untuk kebutuhan Anda</p>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="grid md:grid-cols-3 gap-6">
            @forelse ($services as $service)
                <a href="{{ route('services.show', $service) }}"
                   class="block border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition">
                    @if ($service->image)
                        <img src="{{ Storage::url($service->image) }}"
                             alt="{{ $service->title }}"
                             class="w-full h-44 object-cover">
                    @else
                        <div class="w-full h-44 bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
                            Tidak ada gambar
                        </div>
                    @endif
                    <div class="p-5">
                        <h3 class="font-semibold text-lg mb-2">{{ $service->title }}</h3>
                        <p class="text-gray-500 text-sm">{{ $service->short_description }}</p>
                    </div>
                </a>
            @empty
                <p class="text-gray-400 col-span-3 text-center">Belum ada layanan yang ditambahkan.</p>
            @endforelse
        </div>
    </section>

@endsection