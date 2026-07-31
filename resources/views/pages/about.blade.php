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
                    Klinik Desain & Kemasan UMKM berdiri pada tahun 2020 dengan tujuan untuk meningkatkan kualitas desain kemasan produk UMKM di Kabupaten Solok. <br>
                    Para pelaku usaha UMKM di Kabupaten Solok pada umumnya belum memahami arti penting dari sebuah merek, label, kemasan, dan persyaratan untuk sebuah desain merek label dan kemasan yang baik guna kemajuan usahanya. <br>
                    Pemahaman tentang promosi dan branding produk yang dihasilkan juga masih lemah sehingga walaupun dari rasa maupun mutu tidak kalah dengan produk sejenis daerah lainnya, namun berakibat mengurangi kepercayaan dan minat pembeli.
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
                    Produk UMKM Kabupaten Solok dapat naik kelas dan berstandar nasional melalui desain kemasan yang menarik dan profesional.
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