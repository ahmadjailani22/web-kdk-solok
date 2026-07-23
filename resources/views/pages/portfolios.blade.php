@extends('layouts.app')

@section('title', 'Portofolio Kami - Klinik Desain & Kemasan')
@section('meta_description', 'Lihat proyek-proyek desain dan kemasan yang telah kami kerjakan untuk berbagai UMKM.')

@section('content')

    <div class="max-w-6xl mx-auto px-4 py-14">

        <div class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between md:mb-12">
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-neutral-800 md:text-4xl">
                    Portofolio <span class="text-orange-500">Kami</span>
                </h1>
                <p class="mt-2 max-w-lg text-neutral-600">
                    Proyek-proyek yang telah kami kerjakan untuk berbagai UMKM.
                </p>
            </div>
            <a href="{{ route('contact') }}"
               class="inline-flex items-center justify-center gap-x-2 rounded-lg bg-orange-400 px-4 py-3 text-sm font-bold text-white transition hover:bg-orange-500 shrink-0">
                Konsultasi Sekarang
            </a>
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
            @forelse ($portfolios as $portfolio)
                <a href="{{ route('portfolios.show', $portfolio) }}"
                   class="group relative flex h-64 items-end overflow-hidden rounded-xl shadow-lg outline-hidden">
                    @if ($portfolio->image)
                        <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                             class="absolute inset-0 h-full w-full object-cover object-center transition duration-500 ease-out group-hover:scale-110">
                    @else
                        <div class="absolute inset-0 h-full w-full bg-neutral-200"></div>
                    @endif
                    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-neutral-900/80 via-neutral-900/20 to-transparent"></div>
                    <div class="relative p-5">
                        @if ($portfolio->category)
                            <span class="inline-block bg-orange-400 text-white text-xs font-bold px-2 py-1 rounded mb-2">
                                {{ $portfolio->category }}
                            </span>
                        @endif
                        <h3 class="text-lg font-bold text-white">{{ $portfolio->title }}</h3>
                        @if ($portfolio->client)
                            <p class="text-sm text-neutral-200 mt-1">{{ $portfolio->client }}</p>
                        @endif
                    </div>
                </a>
            @empty
                <p class="text-neutral-400 col-span-3 text-center">Belum ada portofolio yang ditambahkan.</p>
            @endforelse
        </div>

        @if ($portfolios->hasPages())
            <div class="mt-10">
                {{ $portfolios->links() }}
            </div>
        @endif

    </div>

@endsection