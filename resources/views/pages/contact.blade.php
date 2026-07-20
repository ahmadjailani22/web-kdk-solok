@extends('layouts.app')

@section('title', 'Kontak Kami - Nama Perusahaan')
@section('meta_description', 'Hubungi kami untuk konsultasi dan informasi lebih lanjut mengenai layanan kami.')

@section('content')

    <section class="bg-blue-800 text-white py-16 text-center">
        <h1 class="text-3xl md:text-4xl font-bold">Hubungi Kami</h1>
        <p class="text-blue-100 mt-2">Kami siap membantu kebutuhan Anda</p>
    </section>

    <section class="max-w-5xl mx-auto px-4 py-16">
        <div class="grid md:grid-cols-2 gap-10">

            {{-- Info Kontak --}}
            <div>
                <h2 class="text-xl font-bold mb-4">Informasi Kontak</h2>
                <div class="space-y-4 text-gray-600 text-sm">
                    <div>
                        <p class="font-medium text-gray-800">Alamat</p>
                        <p>{{ $settings['company_address'] ?? '-' }}</p>
                    </div>
                    <div>
                        <p class="font-medium text-gray-800">Telepon</p>
                        <p>{{ $settings['company_phone'] ?? '-' }}</p>
                    </div>
                    <div>
                        <p class="font-medium text-gray-800">Email</p>
                        <p>{{ $settings['company_email'] ?? '-' }}</p>
                    </div>
                </div>

                <div class="mt-8 rounded-xl overflow-hidden border border-gray-200 h-56">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1000!2d100.35!3d-0.94!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwNTYnMjQuMCJTIDEwMMKwMjEnMDAuMCJF!5e0!3m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy">
                    </iframe>
                </div>
            </div>

            {{-- Form --}}
            <div>
                <h2 class="text-xl font-bold mb-4">Kirim Pesan</h2>

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
                        <label class="block text-sm font-medium mb-1">Nama</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">Email</label>
                        <input type="email" name="email" value="{{ old('email') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">No. Telepon (opsional)</label>
                        <input type="text" name="phone" value="{{ old('phone') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">Subjek (opsional)</label>
                        <input type="text" name="subject" value="{{ old('subject') }}"
                               class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-1">Pesan</label>
                        <textarea name="message" rows="5"
                                  class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600">{{ old('message') }}</textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-blue-700 text-white font-semibold py-3 rounded-lg hover:bg-blue-800 transition">
                        Kirim Pesan
                    </button>
                </form>
            </div>

        </div>
    </section>

@endsection