@extends('layouts.app')

@section('title', 'Galeri Kegiatan - Klinik Desain & Kemasan')
@section('meta_description', 'Dokumentasi foto berbagai kegiatan Klinik Desain & Kemasan UMKM.')

@section('content')

    <div class="max-w-6xl mx-auto px-4 py-14">

        <div class="mb-10 md:mb-14">
            <h1 class="text-2xl font-bold tracking-tight text-neutral-800 md:text-4xl">
                Galeri <span class="text-orange-500">Kegiatan</span>
            </h1>
            <p class="mt-2 max-w-lg text-neutral-600">
                Dokumentasi foto dari berbagai kegiatan kami.
            </p>
        </div>

        @forelse ($galleries as $gallery)
            <div class="mb-14">
                <div class="mb-4">
                    <h2 class="text-xl font-bold text-neutral-800">{{ $gallery->title }}</h2>
                    <div class="flex items-center gap-3 text-sm text-neutral-500 mt-1">
                        @if ($gallery->event_date)
                            <span>{{ $gallery->event_date->format('d M Y') }}</span>
                        @endif
                        @if ($gallery->description)
                            <span>&bull; {{ $gallery->description }}</span>
                        @endif
                    </div>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                    @foreach ($gallery->photos as $photo)
                        <button type="button"
                                class="gallery-photo group relative block h-40 overflow-hidden rounded-xl shadow-md outline-hidden"
                                data-full="{{ Storage::url($photo->image) }}"
                                data-caption="{{ $photo->caption }}">
                            <img src="{{ Storage::url($photo->image) }}" alt="{{ $photo->caption ?? $gallery->title }}"
                                 class="h-full w-full object-cover transition duration-300 group-hover:scale-110">
                        </button>
                    @endforeach
                </div>
            </div>
        @empty
            <p class="text-neutral-400 text-center py-10">Belum ada dokumentasi kegiatan yang ditambahkan.</p>
        @endforelse

    </div>

    {{-- Lightbox --}}
    <div id="lightbox" class="fixed inset-0 z-999 hidden items-center justify-center bg-black/90 p-4">
        <button type="button" id="lightbox-close"
                class="absolute top-5 right-5 text-white/80 hover:text-white">
            <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="max-w-4xl w-full">
            <img id="lightbox-image" src="" alt="" class="w-full max-h-[80vh] object-contain rounded-lg">
            <p id="lightbox-caption" class="text-center text-neutral-300 text-sm mt-3"></p>
        </div>
    </div>

@endsection