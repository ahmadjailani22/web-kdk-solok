@extends('layouts.app')

@section('title', 'Klinik Desain & Kemasan UMKM')
@section('meta_description', 'Solusi terpercaya untuk kebutuhan perusahaan Anda. Lihat layanan, portofolio, dan berita terbaru kami.')

@section('content')

    {{-- Hero Section --}}
    <section class="max-w-6xl mx-auto grid gap-4 px-4 py-14 md:grid-cols-2 md:items-center md:gap-8">

        <div>
            <h1 class="block text-3xl font-bold tracking-tight text-balance text-neutral-800 sm:text-4xl lg:text-6xl lg:leading-tight">
                Solusi <span class="text-orange-500">Desain & Kemasan</span> untuk UMKM Naik Kelas
            </h1>

            <p class="mt-3 text-lg leading-relaxed text-pretty text-neutral-700 lg:w-4/5">
                Kami membantu UMKM tampil lebih profesional lewat desain dan kemasan produk yang menjual.
            </p>

            <div class="mt-7 grid w-full gap-3 sm:inline-flex">
                <a href="{{ route('contact') }}"
                class="group inline-flex items-center justify-center gap-x-2 rounded-lg border border-transparent bg-orange-400 px-4 py-3 text-sm font-bold text-neutral-50 ring-zinc-500 transition duration-300 hover:bg-orange-500 active:bg-orange-500 focus-visible:ring-3 outline-hidden 2xl:text-base">
                    Hubungi Kami
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition group-hover:translate-x-1" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>

                <a href="{{ route('services.index') }}"
                class="inline-flex items-center justify-center gap-x-2 rounded-lg border border-neutral-200 bg-neutral-100 px-4 py-3 text-center text-sm font-medium text-neutral-600 shadow-xs ring-zinc-500 transition duration-300 hover:bg-neutral-200 focus-visible:ring-3 outline-hidden 2xl:text-base">
                    Lihat Layanan
                </a>
            </div>
        </div>

        <div class="flex w-full">
            <div class="top-12 overflow-hidden rounded-2xl">
                <img src="{{ asset('images/hero.png') }}"
                    alt="Klinik Desain & Kemasan UMKM"
                    class="h-full w-full scale-110 object-cover object-center">
            </div>
        </div>

    </section>

    
    {{-- Kenapa Pilih Kami --}}
    <section class="max-w-6xl mx-auto px-4 py-10 lg:py-14">

        <div class="mt-5 grid gap-8 lg:mt-0 lg:grid-cols-3 lg:gap-12">

            <div class="lg:col-span-1">
                <h2 class="text-2xl font-bold text-balance text-neutral-800 md:text-3xl">
                    Kenapa Pilih Kami
                </h2>
                <p class="mt-2 text-pretty text-neutral-600 md:mt-4">
                    Kami memahami tantangan UMKM dalam bersaing di pasar — dari desain hingga kemasan, kami bantu setiap langkahnya.
                </p>
            </div>

            <div class="lg:col-span-2">
                <div class="grid gap-8 sm:grid-cols-2 md:gap-12">

                    <div class="flex gap-x-5">
                        <svg class="h-8 w-8 shrink-0 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
                        </svg>
                        <div class="grow">
                            <h3 class="text-lg font-bold text-neutral-800">Desain Profesional</h3>
                            <p class="mt-1 text-neutral-700">Tim desainer berpengalaman siap membantu tampilan brand kamu jadi lebih menjual.</p>
                        </div>
                    </div>

                    <div class="flex gap-x-5">
                        <svg class="h-8 w-8 shrink-0 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        <div class="grow">
                            <h3 class="text-lg font-bold text-neutral-800">Konsultasi Personal</h3>
                            <p class="mt-1 text-neutral-700">Kami dengarkan kebutuhan bisnis kamu dulu, baru rancang solusi yang paling pas.</p>
                        </div>
                    </div>

                    <div class="flex gap-x-5">
                        <svg class="h-8 w-8 shrink-0 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                        </svg>
                        <div class="grow">
                            <h3 class="text-lg font-bold text-neutral-800">Kemasan Berkualitas</h3>
                            <p class="mt-1 text-neutral-700">Material dan hasil cetak kemasan yang tahan lama dan tampil maksimal di rak.</p>
                        </div>
                    </div>

                    <div class="flex gap-x-5">
                        <svg class="h-8 w-8 shrink-0 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div class="grow">
                            <h3 class="text-lg font-bold text-neutral-800">Harga Terjangkau</h3>
                            <p class="mt-1 text-neutral-700">Paket layanan yang dirancang khusus supaya tetap ramah di kantong UMKM.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    {{-- Layanan Unggulan (Tab Interaktif) --}}
    <section class="max-w-6xl mx-auto px-4 py-10 lg:py-14">
        <div class="relative rounded-2xl bg-neutral-100 p-6 md:p-16">
            <div class="relative z-10 lg:grid lg:grid-cols-12 lg:items-center lg:gap-16">

                {{-- Nav Tab --}}
                <div class="mb-10 lg:order-2 lg:col-span-6 lg:col-start-8 lg:mb-0">
                    <h2 class="text-2xl font-bold text-neutral-800 sm:text-3xl">
                        Layanan Unggulan <span class="text-orange-500">Kami</span>
                    </h2>

                    <nav class="mt-5 grid gap-4 md:mt-10">

                        <button type="button" data-tab-target="tab-1"
                                class="tab-btn active rounded-xl p-4 text-start outline-hidden transition duration-300 hover:bg-neutral-200">
                            <span class="flex">
                                <svg class="h-8 w-8 shrink-0 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395" />
                                </svg>
                                <span class="ms-6 grow">
                                    <span class="tab-heading block text-lg font-bold text-neutral-800">Desain Logo & Branding</span>
                                    <span class="mt-1 block text-neutral-500">Bangun identitas visual yang kuat dan mudah diingat pelanggan.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button" data-tab-target="tab-2"
                                class="tab-btn rounded-xl p-4 text-start outline-hidden transition duration-300 hover:bg-neutral-200">
                            <span class="flex">
                                <svg class="h-8 w-8 shrink-0 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 7.5l-.625 10.632a2.25 2.25 0 01-2.247 2.118H6.622a2.25 2.25 0 01-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                                </svg>
                                <span class="ms-6 grow">
                                    <span class="tab-heading block text-lg font-bold text-neutral-800">Desain Kemasan Produk</span>
                                    <span class="mt-1 block text-neutral-500">Kemasan menarik yang bikin produk kamu standout di rak toko.</span>
                                </span>
                            </span>
                        </button>

                        <button type="button" data-tab-target="tab-3"
                                class="tab-btn rounded-xl p-4 text-start outline-hidden transition duration-300 hover:bg-neutral-200">
                            <span class="flex">
                                <svg class="h-8 w-8 shrink-0 text-orange-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                </svg>
                                <span class="ms-6 grow">
                                    <span class="tab-heading block text-lg font-bold text-neutral-800">Konsultasi UMKM</span>
                                    <span class="mt-1 block text-neutral-500">Pendampingan strategi visual untuk mendukung pertumbuhan usaha kamu.</span>
                                </span>
                            </span>
                        </button>

                    </nav>
                </div>

                {{-- Tab Content (Gambar) --}}
                <div class="lg:col-span-6">
                    <div class="relative">
                        <div id="tab-1" class="tab-content">
                            <img src="{{ asset('images/tab-branding.png') }}" alt="Desain Logo & Branding"
                                class="aspect-video w-full rounded-xl object-cover shadow-xl lg:aspect-square">
                        </div>
                        <div id="tab-2" class="tab-content hidden">
                            <img src="{{ asset('images/tab-kemasan.png') }}" alt="Desain Kemasan Produk"
                                class="aspect-video w-full rounded-xl object-cover shadow-xl lg:aspect-square">
                        </div>
                        <div id="tab-3" class="tab-content hidden">
                            <img src="{{ asset('images/tab-konsultasi.png') }}" alt="Konsultasi UMKM"
                                class="aspect-video w-full rounded-xl object-cover shadow-xl lg:aspect-square">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Layanan --}}
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="mb-10">
            <h2 class="text-2xl font-bold text-neutral-800 md:text-3xl">
                Layanan <span class="text-orange-500">Kami</span>
            </h2>
            <p class="text-neutral-600 mt-2">Berbagai layanan yang kami sediakan untuk Anda</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
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

        @if ($services->count() > 0)
            <div class="text-center mt-8">
                <a href="{{ route('services.index') }}"
                class="inline-flex items-center gap-x-2 text-orange-500 font-bold hover:text-orange-600 transition">
                    Lihat Semua Layanan
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                    </svg>
                </a>
            </div>
        @endif
    </section>

    {{-- Portofolio --}}
    <section class="bg-neutral-100 py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="mb-10">
                <h2 class="text-2xl font-bold text-neutral-800 md:text-3xl">
                    Portofolio <span class="text-orange-500">Kami</span>
                </h2>
                <p class="text-neutral-600 mt-2">Proyek-proyek yang telah kami kerjakan</p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                @forelse ($portfolios as $portfolio)
                    <a href="{{ route('portfolios.show', $portfolio) }}"
                    class="group relative flex h-48 items-end overflow-hidden rounded-xl shadow-lg outline-hidden">
                        @if ($portfolio->image)
                            <img src="{{ Storage::url($portfolio->image) }}" alt="{{ $portfolio->title }}"
                                class="absolute inset-0 h-full w-full object-cover object-center transition duration-500 ease-out group-hover:scale-110">
                        @else
                            <div class="absolute inset-0 h-full w-full bg-neutral-300"></div>
                        @endif
                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-neutral-900/80 via-neutral-900/10 to-transparent"></div>
                        <span class="relative mb-3 ml-4 text-sm font-bold text-white">
                            {{ $portfolio->title }}
                        </span>
                    </a>
                @empty
                    <p class="text-neutral-400 col-span-4 text-center">Belum ada portofolio.</p>
                @endforelse
            </div>

            @if ($portfolios->count() > 0)
                <div class="text-center mt-8">
                    <a href="{{ route('portfolios.index') }}"
                    class="inline-flex items-center gap-x-2 text-orange-500 font-bold hover:text-orange-600 transition">
                        Lihat Semua Portofolio
                        <svg class="h-4 w-4" fill="none" viewBox="0 0 20 20" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"/>
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </section>

    {{-- Berita Terbaru --}}
    <section class="max-w-6xl mx-auto px-4 py-16">
        <div class="mb-10">
            <h2 class="text-2xl font-bold text-neutral-800 md:text-3xl">
                Berita <span class="text-orange-500">Terbaru</span>
            </h2>
            <p class="text-neutral-600 mt-2">Update dan informasi terkini dari kami</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
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
                <p class="text-neutral-400 col-span-3 text-center">Belum ada berita.</p>
            @endforelse
        </div>
    </section>

@endsection