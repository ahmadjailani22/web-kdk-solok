@extends('layouts.app')

@section('title', 'Portofolio Kami - Klinik Desain & Kemasan UMKM')
@section('meta_description', 'Lihat proyek-proyek yang telah kami kerjakan untuk berbagai klien.')

@section('content')

    <section class="bg-blue-800 text-white py-16 text-center">
        <h1 class="text-3xl md:text-4xl font-bold">Portofolio Kami</h1>
        <p class="text-blue-100 mt-2">Proyek-proyek yang telah kami kerjakan</p>
    </section>

    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="grid md:grid-cols-3 gap-6">
            @forelse ($portfolios as $portfolio)
                <a href="{{ route('portfolios.show', $portfolio) }}"
                   class="group block border border-gray-200 rounded-xl overflow-hidden hover:shadow-lg transition">
                    <div class="overflow-hidden h-48">
                        @if ($portfolio->image)
                            <img src="{{ Storage::url($portfolio->image) }}"
                                 alt="{{ $portfolio->title }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition">
                        @else
                            <div class="w-full h-full bg-gray-100 flex items-center justify-center text-gray-400 text-sm">
                                Tidak ada gambar
                            </div>
                        @endif
                    </div>
                    <div class="p-5">
                        @if ($portfolio->category)
                            <span class="inline-block bg-blue-50 text-blue-700 text-xs font-medium px-2 py-1 rounded mb-2">
                                {{ $portfolio->category }}
                            </span>
                        @endif
                        <h3 class="font-semibold text-lg">{{ $portfolio->title }}</h3>
                        @if ($portfolio->client)
                            <p class="text-gray-400 text-sm mt-1">{{ $portfolio->client }}</p>
                        @endif
                    </div>
                </a>
            @empty
                <p class="text-gray-400 col-span-3 text-center">Belum ada portofolio yang ditambahkan.</p>
            @endforelse
        </div>

        @if ($portfolios->hasPages())
            <div class="mt-10">
                {{ $portfolios->links() }}
            </div>
        @endif
    </section>

@endsection