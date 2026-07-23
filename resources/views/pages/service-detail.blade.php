@extends('layouts.app')

@section('title', $service->title . ' - Klinik Desain & Kemasan')
@section('meta_description', Str::limit(strip_tags($service->short_description ?? $service->description), 155))

@section('content')

    <section class="mx-auto max-w-6xl px-4 py-14">

        <a href="{{ route('services.index') }}"
           class="inline-flex items-center gap-x-1 text-sm text-neutral-600 hover:text-orange-500 transition mb-6">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"/>
            </svg>
            Kembali ke Layanan
        </a>

        <div class="flex flex-col items-start justify-between gap-6 sm:flex-row sm:items-center mb-10">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-neutral-800 md:text-5xl">
                    {{ $service->title }}
                </h1>
                @if ($service->short_description)
                    <p class="mt-3 text-lg text-neutral-600">{{ $service->short_description }}</p>
                @endif
            </div>
        </div>

        @if ($service->image)
            <div class="mb-10 overflow-hidden rounded-2xl shadow-lg">
                <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}"
                     class="w-full h-80 md:h-96 object-cover">
            </div>
        @endif

        <div class="prose max-w-none text-neutral-700 leading-relaxed">
            {{ $service->description }}
        </div>

        <div class="mt-12 rounded-2xl bg-neutral-100 p-8 text-center">
            <p class="text-neutral-700 mb-4 font-medium">Tertarik dengan layanan ini?</p>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-x-2 rounded-lg bg-orange-400 px-6 py-3 text-sm font-bold text-white transition hover:bg-orange-500">
                Hubungi Kami
            </a>
        </div>

    </section>

@endsection