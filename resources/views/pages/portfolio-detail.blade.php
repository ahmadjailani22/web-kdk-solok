@extends('layouts.app')

@section('title', $portfolio->title . ' - Klinik Desain & Kemasan')
@section('meta_description', Str::limit(strip_tags($portfolio->description), 155))

@section('content')

    <section class="mx-auto max-w-6xl px-4 py-14">

        <a href="{{ route('portfolios.index') }}"
           class="inline-flex items-center gap-x-1 text-sm text-neutral-600 hover:text-orange-500 transition mb-6">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"/>
            </svg>
            Kembali ke Portofolio
        </a>

        <h1 class="text-3xl font-bold tracking-tight text-neutral-800 md:text-5xl mb-6">
            {{ $portfolio->title }}
        </h1>

        @if ($portfolio->image)
            <div class="mb-8 overflow-hidden rounded-2xl shadow-lg">
                <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                     class="w-full h-80 md:h-96 object-cover">
            </div>
        @endif

        <div class="flex flex-wrap gap-4 mb-10">
            @if ($portfolio->category)
                <div class="rounded-lg bg-neutral-100 px-4 py-2">
                    <span class="block text-xs text-neutral-500">Kategori</span>
                    <span class="font-bold text-neutral-800">{{ $portfolio->category }}</span>
                </div>
            @endif
            @if ($portfolio->client)
                <div class="rounded-lg bg-neutral-100 px-4 py-2">
                    <span class="block text-xs text-neutral-500">Klien</span>
                    <span class="font-bold text-neutral-800">{{ $portfolio->client }}</span>
                </div>
            @endif
            @if ($portfolio->year)
                <div class="rounded-lg bg-neutral-100 px-4 py-2">
                    <span class="block text-xs text-neutral-500">Tahun</span>
                    <span class="font-bold text-neutral-800">{{ $portfolio->year }}</span>
                </div>
            @endif
        </div>

        <div class="prose max-w-none text-neutral-700 leading-relaxed">
            {{ $portfolio->description }}
        </div>

    </section>

@endsection