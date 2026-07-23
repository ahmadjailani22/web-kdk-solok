@extends('layouts.app')

@section('title', 'Berita & Artikel - Klinik Desain & Kemasan')
@section('meta_description', 'Informasi dan update terkini seputar Klinik Desain & Kemasan UMKM.')

@section('content')

    <div class="max-w-6xl mx-auto px-4 py-14">

        <div class="mb-8 md:mb-12">
            <h1 class="text-2xl font-bold tracking-tight text-neutral-800 md:text-4xl">
                Berita & <span class="text-orange-500">Artikel</span>
            </h1>
            <p class="mt-2 max-w-lg text-neutral-600">
                Informasi dan update terkini dari kami.
            </p>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
            @forelse ($articles as $article)
                <a href="{{ route('articles.show', $article) }}"
                   class="group relative block h-80 overflow-hidden rounded-xl shadow-lg">
                    @if ($article->thumbnail)
                        <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}"
                             class="absolute inset-0 h-full w-full object-cover transition duration-500 group-hover:scale-110">
                    @else
                        <div class="absolute inset-0 h-full w-full bg-neutral-200"></div>
                    @endif
                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-neutral-900/85 via-neutral-900/10 to-transparent"></div>

                    <div class="absolute inset-x-0 bottom-0 p-5">
                        <p class="text-xs text-neutral-200 mb-1">
                            {{ $article->published_at?->format('d M Y') }}
                            @if ($article->category)
                                &bull; {{ $article->category }}
                            @endif
                        </p>
                        <h3 class="text-lg font-bold text-white leading-snug">{{ $article->title }}</h3>
                    </div>
                </a>
            @empty
                <p class="text-neutral-400 col-span-3 text-center">Belum ada berita yang dipublikasikan.</p>
            @endforelse
        </div>

        @if ($articles->hasPages())
            <div class="mt-10">
                {{ $articles->links() }}
            </div>
        @endif

    </div>

@endsection