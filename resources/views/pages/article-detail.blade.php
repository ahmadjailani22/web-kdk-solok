@extends('layouts.app')

@section('title', $article->title . ' - Klinik Desain & Kemasan')
@section('meta_description', Str::limit(strip_tags($article->content), 155))

@section('content')

    <section class="mx-auto max-w-3xl px-4 py-14">

        <a href="{{ route('articles.index') }}"
           class="inline-flex items-center gap-x-1 text-sm text-neutral-600 hover:text-orange-500 transition mb-6">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"/>
            </svg>
            Kembali ke Berita
        </a>

        <div class="mb-6">
            @if ($article->category)
                <span class="inline-block bg-orange-100 text-orange-600 text-xs font-bold px-3 py-1 rounded-full mb-3">
                    {{ $article->category }}
                </span>
            @endif
            <h1 class="text-3xl font-bold tracking-tight text-neutral-800 md:text-5xl">
                {{ $article->title }}
            </h1>
            <p class="mt-3 text-sm text-neutral-500">
                {{ $article->published_at?->format('d M Y') }}
            </p>
        </div>

        @if ($article->thumbnail)
            <div class="mb-8 overflow-hidden rounded-2xl shadow-lg">
                <img src="{{ Storage::url($article->thumbnail) }}" alt="{{ $article->title }}"
                     class="w-full h-80 object-cover">
            </div>
        @endif

        <div class="prose max-w-none text-neutral-700 leading-relaxed">
            {!! $article->content !!}
        </div>

    </section>

@endsection