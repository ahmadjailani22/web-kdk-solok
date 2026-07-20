@extends('layouts.app')

@section('title', $portfolio->title . ' - Nama Perusahaan')
@section('meta_description', Str::limit(strip_tags($portfolio->description), 155))

@section('content')

    <section class="bg-blue-800 text-white py-16 text-center">
        <h1 class="text-3xl md:text-4xl font-bold">{{ $portfolio->title }}</h1>
    </section>

    <section class="max-w-3xl mx-auto px-4 py-16">

        <a href="{{ route('portfolios.index') }}" class="text-blue-700 text-sm hover:underline mb-6 inline-block">
            &larr; Kembali ke Portofolio
        </a>

        @if ($portfolio->image)
            <img src="{{ Storage::url($portfolio->image) }}"
                 alt="{{ $portfolio->title }}"
                 class="w-full h-80 object-cover rounded-xl mb-8">
        @endif

        <div class="flex flex-wrap gap-4 mb-8 text-sm">
            @if ($portfolio->category)
                <div class="bg-gray-100 px-4 py-2 rounded-lg">
                    <span class="text-gray-400 block text-xs">Kategori</span>
                    <span class="font-medium">{{ $portfolio->category }}</span>
                </div>
            @endif
            @if ($portfolio->client)
                <div class="bg-gray-100 px-4 py-2 rounded-lg">
                    <span class="text-gray-400 block text-xs">Klien</span>
                    <span class="font-medium">{{ $portfolio->client }}</span>
                </div>
            @endif
            @if ($portfolio->year)
                <div class="bg-gray-100 px-4 py-2 rounded-lg">
                    <span class="text-gray-400 block text-xs">Tahun</span>
                    <span class="font-medium">{{ $portfolio->year }}</span>
                </div>
            @endif
        </div>

        <div class="prose max-w-none text-gray-700 leading-relaxed">
            {{ $portfolio->description }}
        </div>

    </section>

@endsection