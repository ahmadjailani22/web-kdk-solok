<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kehadiran UMKM - KDK Solok</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-neutral-50 min-h-screen flex items-center justify-center px-4">
    <div class="w-full max-w-md">
        <div class="text-center mb-6">
            <img src="{{ asset('logo.png') }}" alt="Logo KDK Solok" class="h-16 w-auto mx-auto mb-4">
            <h1 class="text-2xl font-bold text-neutral-800">Buku Tamu KDK Solok</h1>
            <p class="text-neutral-500 text-sm mt-1">Cari nama usaha Anda untuk mengisi kehadiran</p>
        </div>

        @if (session('success'))
            <div class="mb-4 rounded-lg bg-green-100 text-green-800 px-4 py-3 text-sm">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="mb-4 rounded-lg bg-red-100 text-red-800 px-4 py-3 text-sm">
                {{ session('error') }}
            </div>
        @endif

        <div class="bg-white rounded-xl shadow-sm border border-neutral-200 p-5">
            <input
                id="search-input"
                type="text"
                placeholder="Ketik nama usaha Anda..."
                class="w-full border border-neutral-300 rounded-lg px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400"
                autocomplete="off"
            >

            <ul id="search-results" class="mt-3 divide-y divide-neutral-100"></ul>

            <p id="no-result" class="hidden text-sm text-neutral-400 mt-3 text-center">
                Nama usaha tidak ditemukan.
            </p>
        </div>

        <div class="text-center mt-5">
            <a href="{{ route('kehadiran.daftar') }}" class="text-sm font-medium text-orange-600 hover:underline">
                Belum pernah daftar? Daftar di sini
            </a>
        </div>
    </div>

    <!-- form tersembunyi untuk submit check-in via POST -->
    <form id="checkin-form" method="POST" action="">
        @csrf
    </form>

    <script>
        const input = document.getElementById('search-input');
        const resultsEl = document.getElementById('search-results');
        const noResultEl = document.getElementById('no-result');
        const checkinForm = document.getElementById('checkin-form');
        let debounceTimer;

        input.addEventListener('input', () => {
            clearTimeout(debounceTimer);
            const keyword = input.value.trim();

            if (keyword.length < 2) {
                resultsEl.innerHTML = '';
                noResultEl.classList.add('hidden');
                return;
            }

            debounceTimer = setTimeout(() => {
                fetch(`{{ route('kehadiran.search') }}?q=${encodeURIComponent(keyword)}`)
                    .then(res => res.json())
                    .then(data => {
                        resultsEl.innerHTML = '';
                        noResultEl.classList.toggle('hidden', data.length > 0);

                        data.forEach(umkm => {
                            const li = document.createElement('li');
                            li.className = 'py-2.5 flex items-center justify-between';
                            li.innerHTML = `
                                <div>
                                    <p class="text-sm font-medium text-neutral-800">${umkm.nama_usaha}</p>
                                    <p class="text-xs text-neutral-400">${umkm.nama_pemilik}</p>
                                </div>
                                <button type="button" data-id="${umkm.id}"
                                    class="checkin-btn text-xs font-semibold bg-orange-500 text-white px-3 py-1.5 rounded-lg hover:bg-orange-600">
                                    Absen
                                </button>
                            `;
                            resultsEl.appendChild(li);
                        });
                    });
            }, 300);
        });

        resultsEl.addEventListener('click', (e) => {
            const btn = e.target.closest('.checkin-btn');
            if (!btn) return;

            const umkmId = btn.dataset.id;
            checkinForm.action = `/kehadiran/checkin/${umkmId}`;
            checkinForm.submit();
        });
    </script>
</body>
</html>
