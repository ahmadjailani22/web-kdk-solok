<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Klinik Desain & Kemasan UMKM')</title>
    <meta name="description" content="@yield('meta_description', 'Deskripsi singkat perusahaan Anda untuk mesin pencari.')">

    {{-- Open Graph (tampilan saat link dishare di WhatsApp/Facebook/dll) --}}
    <meta property="og:title" content="@yield('title', 'Klinik Desain & Kemasan UMKM')">
    <meta property="og:description" content="@yield('meta_description', 'Deskripsi singkat perusahaan Anda.')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Favicon (placeholder dulu, ganti setelah logo jadi) --}}
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800">

    {{-- Header --}}
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}">
                <img src="{{ asset('logo.png') }}" alt="Klinik Desain & Kemasan UMKM" class="h-10 md:h-12 w-auto">
            </a>

            {{-- Menu Desktop --}}
            <nav class="hidden md:flex gap-6 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-blue-700">Home</a>
                <a href="{{ route('about') }}" class="hover:text-blue-700">Tentang Kami</a>
                <a href="{{ route('services.index') }}" class="hover:text-blue-700">Layanan</a>
                <a href="{{ route('portfolios.index') }}" class="hover:text-blue-700">Portofolio</a>
                <a href="{{ route('articles.index') }}" class="hover:text-blue-700">Berita</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-700">Kontak</a>
            </nav>

            {{-- Tombol Hamburger (mobile only) --}}
            <button id="menu-toggle" class="md:hidden text-gray-700" aria-label="Toggle menu">
                <svg id="icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        {{-- Menu Mobile (dropdown) --}}
        <nav id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100 px-4 py-3 space-y-3 text-sm font-medium">
            <a href="{{ route('home') }}" class="block hover:text-blue-700">Home</a>
            <a href="{{ route('about') }}" class="block hover:text-blue-700">Tentang Kami</a>
            <a href="{{ route('services.index') }}" class="block hover:text-blue-700">Layanan</a>
            <a href="{{ route('portfolios.index') }}" class="block hover:text-blue-700">Portofolio</a>
            <a href="{{ route('articles.index') }}" class="block hover:text-blue-700">Berita</a>
            <a href="{{ route('contact') }}" class="block hover:text-blue-700">Kontak</a>
        </nav>
    </header>

    {{-- Main Content --}}
    <main>
        @if (session('success'))
            <div class="max-w-6xl mx-auto px-4 mt-4">
                <div class="bg-green-100 text-green-800 border border-green-300 rounded-lg px-4 py-3 text-sm">
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="w-full bg-neutral-100 border-t border-neutral-200">
        <div class="mx-auto w-full max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:pt-16">

            <div class="grid grid-cols-2 gap-8 md:grid-cols-4">

                {{-- Logo & Deskripsi --}}
                <div class="col-span-2">
                    <img src="{{ asset('logo.png') }}" alt="{{ $settings['company_name'] ?? 'Klinik Desain & Kemasan' }}" class="h-10 w-auto mb-3">
                    <p class="text-sm text-neutral-600 max-w-xs">
                        {{ $settings['company_description'] ?? 'Solusi desain dan kemasan untuk UMKM naik kelas.' }}
                    </p>
                </div>

                {{-- Menu --}}
                <div>
                    <h3 class="font-bold text-neutral-800">Menu</h3>
                    <ul class="mt-3 space-y-3 text-sm">
                        <li><a href="{{ route('services.index') }}" class="text-neutral-600 hover:text-orange-500 transition">Layanan</a></li>
                        <li><a href="{{ route('portfolios.index') }}" class="text-neutral-600 hover:text-orange-500 transition">Portofolio</a></li>
                        <li><a href="{{ route('articles.index') }}" class="text-neutral-600 hover:text-orange-500 transition">Berita</a></li>
                        <li><a href="{{ route('about') }}" class="text-neutral-600 hover:text-orange-500 transition">Tentang Kami</a></li>
                    </ul>
                </div>

                {{-- Kontak --}}
                <div>
                    <h3 class="font-bold text-neutral-800">Kontak</h3>
                    <ul class="mt-3 space-y-3 text-sm text-neutral-600">
                        <li>{{ $settings['company_address'] ?? '-' }}</li>
                        <li>{{ $settings['company_phone'] ?? '-' }}</li>
                        <li>{{ $settings['company_email'] ?? '-' }}</li>
                    </ul>
                </div>

            </div>

            {{-- Bottom bar --}}
            <div class="mt-9 grid gap-y-4 border-t border-neutral-200 pt-6 sm:mt-12 sm:flex sm:items-center sm:justify-between sm:gap-y-0">

                <p class="text-sm text-neutral-600">
                    &copy; {{ date('Y') }} {{ $settings['company_name'] ?? 'Klinik Desain & Kemasan' }}. All rights reserved.
                </p>

                {{-- Social Icons --}}
                <div class="flex gap-3">
                    @if (!empty($settings['facebook_url']))
                        <a href="{{ $settings['facebook_url'] }}" target="_blank"
                        class="flex h-9 w-9 items-center justify-center rounded-full bg-neutral-200 text-neutral-600 transition hover:bg-orange-500 hover:text-white">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </a>
                    @endif
                    @if (!empty($settings['instagram_url']))
                        <a href="{{ $settings['instagram_url'] }}" target="_blank"
                        class="flex h-9 w-9 items-center justify-center rounded-full bg-neutral-200 text-neutral-600 transition hover:bg-orange-500 hover:text-white">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    @endif
                    @if (!empty($settings['whatsapp_number']))
                        <a href="https://wa.me/{{ $settings['whatsapp_number'] }}" target="_blank"
                        class="flex h-9 w-9 items-center justify-center rounded-full bg-neutral-200 text-neutral-600 transition hover:bg-orange-500 hover:text-white">
                            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91S17.5 2 12.04 2zm5.71 14.04c-.24.68-1.4 1.3-1.93 1.34-.5.05-1.02.24-3.43-.72-2.9-1.15-4.76-4.1-4.9-4.29-.14-.19-1.17-1.56-1.17-2.97 0-1.41.74-2.1 1-2.39.26-.29.57-.36.76-.36.19 0 .38 0 .55.01.18.01.42-.07.65.5.24.58.81 2 .88 2.14.07.14.12.31.02.5-.1.19-.15.31-.29.48-.14.17-.3.38-.43.51-.14.14-.29.29-.12.57.17.29.75 1.23 1.61 1.99 1.11.98 2.04 1.29 2.33 1.43.29.14.46.12.63-.07.17-.19.72-.84.91-1.13.19-.29.38-.24.64-.14.26.1 1.66.78 1.94.92.29.14.48.21.55.33.07.12.07.68-.17 1.36z"/>
                            </svg>
                        </a>
                    @endif
                </div>

            </div>
        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const iconOpen = document.getElementById('icon-open');
        const iconClose = document.getElementById('icon-close');

        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            iconOpen.classList.toggle('hidden');
            iconClose.classList.toggle('hidden');
        });
    </script>

    <script>
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.dataset.tabTarget;

                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                document.querySelectorAll('.tab-content').forEach(content => {
                    content.classList.toggle('hidden', content.id !== target);
                });
            });
        });
    </script>

</body>
</html>