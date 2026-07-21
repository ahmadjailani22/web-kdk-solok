@extends('layouts.app')

@section('title', $article->title . ' - Klinik Desain & Kemasan UMKM')
@section('meta_description', Str::limit(strip_tags($article->content), 155))

@section('content')

    <section class="bg-blue-800 text-white py-16 text-center px-4">
        <h1 class="text-3xl md:text-4xl font-bold max-w-2xl mx-auto">{{ $article->title }}</h1>
        <p class="text-blue-100 mt-4 text-sm">
            {{ $article->published_at?->format('d M Y') }}
            @if ($article->category)
                &bull; {{ $article->category }}
            @endif
        </p>
    </section>

    <section class="max-w-3xl mx-auto px-4 py-16">

        <a href="{{ route('articles.index') }}" class="text-blue-700 text-sm hover:underline mb-6 inline-block">
            &larr; Kembali ke Berita
        </a>

        @if ($article->thumbnail)
            <img src="{{ Storage::url($article->thumbnail) }}"
                 alt="{{ $article->title }}"
                 class="w-full h-80 object-cover rounded-xl mb-8">
        @endif

        <div class="prose max-w-none text-gray-700 leading-relaxed">
            {!! $article->content !!}
        </div>

    </section>

@endsection