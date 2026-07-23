@extends('layouts.app')

@section('title', 'Layanan Kami - Klinik Desain & Kemasan')
@section('meta_description', 'Berbagai layanan profesional yang kami sediakan untuk mendukung kebutuhan bisnis UMKM Anda.')

@section('content')

    <div class="max-w-6xl mx-auto px-4 py-14">

        <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between md:mb-12">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-neutral-800 md:text-4xl">
                    Layanan <span class="text-orange-500">Kami</span>
                </h1>
                <p class="mt-2 max-w-lg text-neutral-600">
                    Berbagai solusi desain dan kemasan yang kami sediakan untuk membantu UMKM tampil lebih profesional.
                </p>
            </div>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-x-2 rounded-lg bg-orange-400 px-4 py-3 text-sm font-bold text-white transition hover:bg-orange-500 shrink-0">
                Konsultasi Sekarang
            </a>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
            @forelse ($services as $service)
                <a href="{{ route('services.show', $service) }}"
                   class="group relative flex h-64 items-end overflow-hidden rounded-xl shadow-lg outline-hidden">
                    @if ($service->image)
                        <img src="{{ Storage::url($service->image) }}" alt="{{ $service->title }}"
                             class="absolute inset-0 h-full w-full object-cover object-center transition duration-500 ease-out group-hover:scale-110">
                    @else
                        <div class="absolute inset-0 h-full w-full bg-neutral-200"></div>
                    @endif
                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-neutral-900/80 via-neutral-900/20 to-transparent"></div>
                    <div class="relative p-5">
                        <h3 class="text-lg font-bold text-white">{{ $service->title }}</h3>
                        <p class="text-sm text-neutral-200 mt-1 line-clamp-2">{{ $service->short_description }}</p>
                    </div>
                </a>
            @empty
                <p class="text-neutral-400 col-span-3 text-center">Belum ada layanan yang ditambahkan.</p>
            @endforelse
        </div>

    </div>

@endsection