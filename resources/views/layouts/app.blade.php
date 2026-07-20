<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nama Perusahaan')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-800">

    {{-- Header --}}
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <a href="{{ route('home') }}" class="text-xl font-bold text-blue-700">
                Nama Perusahaan
            </a>
            <nav class="hidden md:flex gap-6 text-sm font-medium">
                <a href="{{ route('home') }}" class="hover:text-blue-700">Home</a>
                <a href="{{ route('about') }}" class="hover:text-blue-700">Tentang Kami</a>
                <a href="{{ route('services.index') }}" class="hover:text-blue-700">Layanan</a>
                <a href="{{ route('portfolios.index') }}" class="hover:text-blue-700">Portofolio</a>
                <a href="{{ route('articles.index') }}" class="hover:text-blue-700">Berita</a>
                <a href="{{ route('contact') }}" class="hover:text-blue-700">Kontak</a>
            </nav>
        </div>
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
                <h3 class="text-white font-semibold mb-3">{{ $settings['company_name'] ?? 'Nama Perusahaan' }}</h3>
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
            &copy; {{ date('Y') }} {{ $settings['company_name'] ?? 'Nama Perusahaan' }}. All rights reserved.
        </div>
    </footer>

</body>
</html>