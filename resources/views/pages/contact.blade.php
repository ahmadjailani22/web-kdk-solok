@extends('layouts.app')

@section('title', 'Kontak Kami - Klinik Desain & Kemasan')
@section('meta_description', 'Hubungi kami untuk konsultasi dan informasi lebih lanjut mengenai layanan desain dan kemasan.')

@section('content')

    <section class="max-w-6xl mx-auto px-4 py-14">

        <div class="mb-10 md:mb-14">
            <h1 class="text-2xl font-bold tracking-tight text-neutral-800 md:text-4xl">
                Hubungi <span class="text-orange-500">Kami</span>
            </h1>
            <p class="mt-2 max-w-lg text-neutral-600">
                Kami siap membantu kebutuhan desain dan kemasan UMKM Anda.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-10">

            {{-- Info Kontak --}}
            <div>
                <div class="space-y-5">
                    <div class="flex gap-x-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-orange-100 text-orange-500">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-neutral-800">Alamat</p>
                            <p class="text-neutral-600 text-sm mt-0.5">{{ $settings['company_address'] ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="flex gap-x-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-orange-100 text-orange-500">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-neutral-800">Telepon</p>
                            <p class="text-neutral-600 text-sm mt-0.5">{{ $settings['company_phone'] ?? '-' }}</p>
                        </div>
                    </div>

                    <div class="flex gap-x-4">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-orange-100 text-orange-500">
                            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-bold text-neutral-800">Email</p>
                            <p class="text-neutral-600 text-sm mt-0.5">{{ $settings['company_email'] ?? '-' }}</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8 rounded-2xl overflow-hidden shadow-lg h-56">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1000!2d100.35!3d-0.94!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwNTYnMjQuMCJTIDEwMMKwMjEnMDAuMCJF!5e0!3m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div>

            {{-- Form --}}
            <div class="rounded-2xl bg-neutral-100 p-6 md:p-8">
                <h2 class="text-xl font-bold text-neutral-800 mb-5">Kirim Pesan</h2>

                @if ($errors->any())
                    <div class="bg-red-50 text-red-700 border border-red-200 rounded-lg px-4 py-3 text-sm mb-4">
                        <ul class="list-disc list-inside space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-sm font-medium text-neutral-700 mb-1">Nama</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                               class="w-full rounded-lg border border-neutral-200 bg-white px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-neutral-700 mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               class="w-full rounded-lg border border-neutral-200 bg-white px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-neutral-700 mb-1">No. Telepon (opsional)</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                               class="w-full rounded-lg border border-neutral-200 bg-white px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-neutral-700 mb-1">Subjek (opsional)</label>
                        <input type="text" name="subject" value="{{ old('subject') }}"
                               class="w-full rounded-lg border border-neutral-200 bg-white px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-neutral-700 mb-1">Pesan</label>
                        <textarea name="message" rows="5"
                                  class="w-full rounded-lg border border-neutral-200 bg-white px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit"
                            class="w-full rounded-lg bg-orange-400 py-3 text-sm font-bold text-white transition hover:bg-orange-500">
                        Kirim Pesan
                    </button>
                </form>
            </div>

        </div>
    </section>

@endsection