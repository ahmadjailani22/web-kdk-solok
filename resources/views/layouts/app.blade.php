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
    <footer class="bg-gray-900 text-gray-300 mt-16">
        <div class="max-w-6xl mx-auto px-4 py-10 grid md:grid-cols-3 gap-8">
            <div>
                <div class="inline-block bg-white rounded-lg px-3 py-2 mb-3">
                    <img src="{{ asset('logo.png') }}" alt="{{ $settings['company_name'] ?? 'Klinik Desain & Kemasan UMKM' }}" class="h-10 w-auto">
                </div>
                <p class="text-sm">{{ $settings['company_description'] ?? 'Deskripsi singkat perusahaan.' }}</p>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-3">Kontak</h3>
                <p class="text-sm">{{ $settings['company_address'] ?? '-' }}</p>
                <p class="text-sm">Telepon: {{ $settings['company_phone'] ?? '-' }}</p>
                <p class="text-sm">Email: {{ $settings['company_email'] ?? '-' }}</p>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-3">Ikuti Kami</h3>
                <ul class="text-sm space-y-1">
                    @if (!empty($settings['facebook_url']))
                        <li><a href="{{ $settings['facebook_url'] }}" target="_blank" class="hover:text-white">Facebook</a></li>
                    @endif
                    @if (!empty($settings['instagram_url']))
                        <li><a href="{{ $settings['instagram_url'] }}" target="_blank" class="hover:text-white">Instagram</a></li>
                    @endif
                    @if (!empty($settings['whatsapp_number']))
                        <li><a href="https://wa.me/{{ $settings['whatsapp_number'] }}" target="_blank" class="hover:text-white">WhatsApp</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 py-4 text-center text-xs">
            &copy; {{ date('Y') }} {{ $settings['company_name'] ?? 'Klinik Desain & Kemasan UMKM' }}. All rights reserved.
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

</body>
</html>