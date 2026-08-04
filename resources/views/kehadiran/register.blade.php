<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar UMKM - KDK Solok</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-50 min-h-screen flex items-center justify-center px-4 py-10">
    <div class="w-full max-w-md">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-neutral-800">Daftar UMKM Baru</h1>
            <p class="text-neutral-500 text-sm mt-1">Isi data usaha Anda sebelum mengisi kehadiran</p>
        </div>

        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-100 text-red-800 px-4 py-3 text-sm">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('kehadiran.daftar.store') }}" class="bg-white rounded-xl shadow-sm border border-neutral-200 p-5 space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-medium text-neutral-700 mb-1">Nama Usaha</label>
                <input type="text" name="nama_usaha" value="{{ old('nama_usaha') }}"
                    class="w-full border border-neutral-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-neutral-700 mb-1">Nama Pemilik</label>
                <input type="text" name="nama_pemilik" value="{{ old('nama_pemilik') }}"
                    class="w-full border border-neutral-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-neutral-700 mb-1">No. HP/WA</label>
                <input type="text" name="no_hp" value="{{ old('no_hp') }}"
                    class="w-full border border-neutral-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-neutral-700 mb-1">Alamat</label>
                <textarea name="alamat" rows="2"
                    class="w-full border border-neutral-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">{{ old('alamat') }}</textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-neutral-700 mb-1">Jenis Usaha / Kategori</label>
                <input type="text" name="jenis_usaha" value="{{ old('jenis_usaha') }}" placeholder="Contoh: Kuliner, Kerajinan, Fashion"
                    class="w-full border border-neutral-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">
            </div>

            <div>
                <label class="block text-sm font-medium text-neutral-700 mb-1">Produk yang Dijual</label>
                <textarea name="produk_dijual" rows="2" placeholder="Contoh: Keripik singkong, kerupuk, dendeng"
                    class="w-full border border-neutral-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">{{ old('produk_dijual') }}</textarea>
            </div>

            <button type="submit"
                class="w-full bg-orange-500 text-white font-semibold py-2.5 rounded-lg hover:bg-orange-600 text-sm">
                Daftar & Isi Kehadiran
            </button>
        </form>

        <div class="text-center mt-5">
            <a href="{{ route('kehadiran.index') }}" class="text-sm font-medium text-neutral-500 hover:underline">
                &larr; Kembali
            </a>
        </div>
    </div>
</body>
</html>
