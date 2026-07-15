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
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-gray-300 mt-16">
        <div class="max-w-6xl mx-auto px-4 py-10 grid md:grid-cols-3 gap-8">
            <div>
                <h3 class="text-white font-semibold mb-3">Nama Perusahaan</h3>
                <p class="text-sm">Deskripsi singkat perusahaan di sini.</p>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-3">Kontak</h3>
                <p class="text-sm">Alamat perusahaan</p>
                <p class="text-sm">Telepon: -</p>
                <p class="text-sm">Email: -</p>
            </div>
            <div>
                <h3 class="text-white font-semibold mb-3">Menu</h3>
                <ul class="text-sm space-y-1">
                    <li><a href="{{ route('services.index') }}" class="hover:text-white">Layanan</a></li>
                    <li><a href="{{ route('portfolios.index') }}" class="hover:text-white">Portofolio</a></li>
                    <li><a href="{{ route('articles.index') }}" class="hover:text-white">Berita</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-800 py-4 text-center text-xs">
            &copy; {{ date('Y') }} Nama Perusahaan. All rights reserved.
        </div>
    </footer>

</body>
</html>