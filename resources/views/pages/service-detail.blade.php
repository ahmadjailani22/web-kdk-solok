@extends('layouts.app')

@section('title', $service->title . ' - Klinik Desain & Kemasan UMKM')
@section('meta_description', Str::limit(strip_tags($service->short_description ?? $service->description), 155))

@section('content')

    <section class="bg-blue-800 text-white py-16 text-center">
        <h1 class="text-3xl md:text-4xl font-bold">{{ $service->title }}</h1>
    </section>

    <section class="max-w-3xl mx-auto px-4 py-16">

        <a href="{{ route('services.index') }}" class="text-blue-700 text-sm hover:underline mb-6 inline-block">
            &larr; Kembali ke Layanan
        </a>

        @if ($service->image)
            <img src="{{ Storage::url($service->image) }}"
                 alt="{{ $service->title }}"
                 class="w-full h-72 object-cover rounded-xl mb-8">
        @endif

        <div class="prose max-w-none text-gray-700 leading-relaxed">
            {{ $service->description }}
        </div>

        <div class="mt-10 border-t border-gray-200 pt-8 text-center">
            <p class="text-gray-500 mb-4">Tertarik dengan layanan ini?</p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg hover:bg-blue-800 transition">
                Hubungi Kami
            </a>
        </div>

    </section>

@endsection