@extends('layouts.app')

@section('title', 'Beranda - Nama Perusahaan')
@section('meta_description', 'Solusi terpercaya untuk kebutuhan perusahaan Anda. Lihat layanan, portofolio, dan berita terbaru kami.')

@section('content')

    {{-- Hero Section --}}
    <section class="bg-gradient-to-br from-blue-700 to-blue-900 text-white">
        <div class="max-w-6xl mx-auto px-4 py-24 text-center">
            <h1 class="text-3xl md:text-5xl font-bold mb-4">
                Solusi Terpercaya untuk Kebutuhan Perusahaan Anda
            </h1>
            <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                Kami menghadirkan layanan profesional dengan kualitas terbaik untuk mendukung pertumbuhan bisnis Anda.
            </p>
            <a href="{{ route('contact') }}"
               class="inline-block bg-white text-blue-800 font-semibold px-6 py-3 rounded-lg hover:bg-blue-50 transition">
                Hubungi Kami
            </a>
        </div>
    </section>

    {{-- Layanan --}}
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold">Layanan Kami</h2>
            <p class="text-gray-500 mt-2">Berbagai layanan yang kami sediakan untuk Anda</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @forelse ($services as $service)
                <a href="{{ route('services.show', $service) }}"
                   class="block border border-gray-200 rounded-xl p-6 hover:shadow-lg transition">
                    @if ($service->image)
                        <img src="{{ Storage::url($service->image) }}"
                             alt="{{ $service->title }}"
                             class="w-full h-40 object-cover rounded-lg mb-4">
                    @endif
                    <h3 class="font-semibold text-lg mb-2">{{ $service->title }}</h3>
                    <p class="text-gray-500 text-sm">{{ $service->short_description }}</p>
                </a>
            @empty
                <p class="text-gray-400 col-span-3 text-center">Belum ada layanan yang ditambahkan.</p>
            @endforelse
        </div>

        @if ($services->count() > 0)
            <div class="text-center mt-8">
                <a href="{{ route('services.index') }}" class="text-blue-700 font-medium hover:underline">
                    Lihat Semua Layanan &rarr;
                </a>
            </div>
        @endif
    </section>

    {{-- Portofolio --}}
    <section class="bg-gray-50 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-10">
                <h2 class="text-2xl md:text-3xl font-bold">Portofolio Kami</h2>
                <p class="text-gray-500 mt-2">Proyek-proyek yang telah kami kerjakan</p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                @forelse ($portfolios as $portfolio)
                    <a href="{{ route('portfolios.show', $portfolio) }}" class="group block">
                        <div class="overflow-hidden rounded-lg mb-3">
                            @if ($portfolio->image)
                                <img src="{{ Storage::url($portfolio->image) }}"
                                     alt="{{ $portfolio->title }}"
                                     class="w-full h-40 object-cover group-hover:scale-105 transition">
                            @endif
                        </div>
                        <h3 class="font-medium text-sm">{{ $portfolio->title }}</h3>
                        <p class="text-gray-400 text-xs">{{ $portfolio->category }}</p>
                    </a>
                @empty
                    <p class="text-gray-400 col-span-4 text-center">Belum ada portofolio.</p>
                @endforelse
            </div>

            @if ($portfolios->count() > 0)
                <div class="text-center mt-8">
                    <a href="{{ route('portfolios.index') }}" class="text-blue-700 font-medium hover:underline">
                        Lihat Semua Portofolio &rarr;
                    </a>
                </div>
            @endif
        </div>
    </section>

    {{-- Berita Terbaru --}}
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold">Berita Terbaru</h2>
            <p class="text-gray-500 mt-2">Update dan informasi terkini dari kami</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @forelse ($articles as $article)
                <a href="{{ route('articles.show', $article) }}"
                   class="block border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition">
                    @if ($article->thumbnail)
                        <img src="{{ Storage::url($article->thumbnail) }}"
                             alt="{{ $article->title }}"
                             class="w-full h-40 object-cover">
                    @endif
                    <div class="p-5">
                        <p class="text-xs text-gray-400 mb-1">
                            {{ $article->published_at?->format('d M Y') }}
                        </p>
                        <h3 class="font-semibold mb-2">{{ $article->title }}</h3>
                    </div>
                </a>
            @empty
                <p class="text-gray-400 col-span-3 text-center">Belum ada berita.</p>
            @endforelse
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-blue-800 text-white py-16 text-center">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">Tertarik Bekerja Sama dengan Kami?</h2>
        <a href="{{ route('contact') }}"
           class="inline-block bg-white text-blue-800 font-semibold px-6 py-3 rounded-lg hover:bg-blue-50 transition">
            Hubungi Kami Sekarang
        </a>
    </section>

@endsection