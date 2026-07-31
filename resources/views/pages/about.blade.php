@extends('layouts.app')

@section('title', 'Tentang Kami - Klinik Desain & Kemasan')
@section('meta_description', 'Kenali lebih dekat sejarah, visi misi, dan tim di balik Klinik Desain & Kemasan UMKM.')

@section('content')

    <div class="max-w-6xl mx-auto px-4 py-14">

        <div class="mb-10 md:mb-14">
            <h1 class="text-2xl font-bold tracking-tight text-neutral-800 md:text-4xl">
                Tentang <span class="text-orange-500">Kami</span>
            </h1>
        </div>

        <div class="grid md:grid-cols-2 gap-10 items-center mb-16">
            <div>
                <h2 class="text-2xl font-bold text-neutral-800 mb-4">Sejarah KDK</h2>
                <p class="text-neutral-600 leading-relaxed">
                    Klinik Desain dan Kemasan (KDK) UMKM Kabupaten Solok diresmikan pada akhir tahun 2022 di bawah naungan Dinas Koperasi, Usaha Kecil Menengah, Perindustrian dan Perdagangan (DKUKMPP) Kabupaten Solok, berlokasi di Selayo, Kecamatan Kubung. Kehadiran KDK merupakan wujud komitmen Pemerintah Kabupaten Solok dalam mendorong produk UMKM lokal agar lebih berdaya saing, baik dari segi desain kemasan, identitas visual (logo dan branding), maupun kelengkapan legalitas usaha. <br>
                    Layanan yang kami sediakan meliputi konsultasi kemasan, desain kemasan dan poster, branding, pendampingan pengurusan NIB, hingga konsultasi proposal bantuan peralatan bagi pelaku UMKM. Sejak awal beroperasi, KDK telah melayani ratusan UMKM di Kabupaten Solok, membantu produk mereka tampil lebih profesional dan siap bersaing di pasar modern maupun minimarket. <br>
                </p>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg h-64">
                <img src="{{ asset('images/about.jpg') }}" alt="Klinik Desain & Kemasan" class="w-full h-full object-cover">
            </div>
        </div>

        <div class="grid md:grid-cols-2 gap-6 mb-16">
            <div class="rounded-2xl bg-neutral-100 p-6">
                <h3 class="font-bold text-lg text-neutral-800 mb-2">Visi</h3>
                <p class="text-neutral-600 text-sm leading-relaxed">
                    Menjadikan produk UMKM Kabupaten Solok berdaya saing tinggi melalui desain dan kemasan yang profesional, sejalan dengan visi Kabupaten Solok "Mambangkik Batang Tarandam" menuju Kabupaten Solok Terbaik di Sumatera Barat.
                </p>
            </div>
            <div class="rounded-2xl bg-neutral-100 p-6">
                <h3 class="font-bold text-lg text-neutral-800 mb-2">Misi</h3>
                <p class="text-neutral-600 text-sm leading-relaxed">
                    1. Mengembangkan desain merek dan kemasan dalam rangka meningkatkan daya tarik merek dan tampilan serta pemenuhan persyaratan teknis yang baik untuk produk UMKM Kabupaten Solok. <br>
                    2. Menjadi mitra kerja yang profesional dan kreatif bagi UMKM di Kabupaten Solok dalam pengembangan desain merek dan kemasan produk. <br>
                    3. Melakukan pembaharuan kemasan sesuai dengan selera konsumen. <br>
                    4. Memberikan edukasi kepada pelaku UMKM dan transfer IPTEK kepada pelajar dan mahasiswa di Kabupaten Solok dalam pengembangan desain merek dan kemasan produk. <br>
                    5. Meningkatkan kesadaran dan kepedulian masyarakat terhadap merek, kemasan, dan branding untuk peningkatan pemasaran produk. 
                </p>
            </div>
        </div>

        <div>
            <h2 class="text-2xl font-bold text-neutral-800 mb-6 text-center">Tim KDK</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                @php
                    $team = [
                        ['name' => 'Syawlani Affandi, S.Sn', 'position' => 'Ketua'],
                        ['name' => 'Afrialdi, SE, MM', 'position' => 'Koordinator'],
                        ['name' => 'Aulia Andri, S.Kom', 'position' => 'Desain Grafis'],
                        ['name' => 'Ikhwanul Fajri, S.Pd', 'position' => 'Tenaga Pemasaran dan Branding'],
                        ['name' => 'Yopi Despita, ST', 'position' => 'Laporan Layanan dan Penerimaan PAD'],
                        ['name' => 'Fakhrul Rozi Asnur, S.Kom', 'position' => 'Tenaga Studio Fotografi dan Digital Marketing'],
                        ['name' => 'Aifan Nasri', 'position' => 'Keamanan'],
                    ];
                @endphp

                @foreach ($team as $member)
                    <div class="text-center">
                        <div class="w-24 h-24 mx-auto bg-neutral-200 rounded-full mb-3"></div>
                        <p class="font-bold text-sm text-neutral-800">{{ $member['name'] }}</p>
                        <p class="text-neutral-500 text-xs mt-0.5">{{ $member['position'] }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

@endsection