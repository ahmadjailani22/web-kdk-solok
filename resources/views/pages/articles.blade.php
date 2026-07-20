@extends('layouts.app')

@section('title', 'Berita & Artikel - Nama Perusahaan')
@section('meta_description', 'Informasi dan update terkini seputar perusahaan kami.')

@section('content')

    <section class="bg-blue-800 text-white py-16 text-center">
        <h1 class="text-3xl md:text-4xl font-bold">Berita & Artikel</h1>
        <p class="text-blue-100 mt-2">Informasi dan update terkini dari kami</p>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="grid md:grid-cols-3 gap-6">
            @forelse ($articles as $article)
                <a href="{{ route('articles.show', $article) }}"
                   class="block border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition">
                    <div class="h-44 overflow-hidden">
                        @if ($article->thumbnail)
                            <img src="{{ Storage::url($article->thumbnail) }}"
                                 alt="{{ $article->title }}"
                                 class="w-full h-full object-cover">
                        @else
                            <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
                                Tidak ada gambar
                            </div>
                        @endif
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-2 text-xs text-gray-400 mb-2">
                            <span>{{ $article->published_at?->format('d M Y') }}</span>
                            @if ($article->category)
                                <span>&bull;</span>
                                <span>{{ $article->category }}</span>
                            @endif
                        </div>
                        <h3 class="font-semibold text-lg leading-snug">{{ $article->title }}</h3>
                    </div>
                </a>
            @empty
                <p class="text-gray-400 col-span-3 text-center">Belum ada berita yang dipublikasikan.</p>
            @endforelse
        </div>

        @if ($articles->hasPages())
            <div class="mt-10">
                {{ $articles->links() }}
            </div>
        @endif
    </section>

@endsection