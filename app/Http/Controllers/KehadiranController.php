<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Umkm;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KehadiranController extends Controller
{
    /**
     * Halaman utama setelah scan QR: search box + tombol daftar baru.
     */
    public function index(): View
    {
        return view('kehadiran.index');
    }

    /**
     * Endpoint pencarian nama usaha (dipanggil via AJAX/fetch dari halaman index).
     */
    public function search(Request $request)
    {
        $keyword = $request->query('q', '');

        $umkms = Umkm::query()
            ->when($keyword, fn ($q) => $q->where('nama_usaha', 'like', "%{$keyword}%"))
            ->orderBy('nama_usaha')
            ->limit(10)
            ->get(['id', 'nama_usaha', 'nama_pemilik']);

        return response()->json($umkms);
    }

    /**
     * Proses check-in untuk UMKM yang sudah pernah terdaftar.
     */
    public function checkin(Request $request, Umkm $umkm): RedirectResponse
    {
        if ($umkm->sudahAbsenHariIni()) {
            return redirect()
                ->route('kehadiran.index')
                ->with('error', "{$umkm->nama_usaha} sudah mengisi kehadiran hari ini.");
        }

        Kehadiran::create([
            'umkm_id' => $umkm->id,
            'tanggal' => now()->toDateString(),
            'waktu' => now(),
        ]);

        return redirect()
            ->route('kehadiran.index')
            ->with('success', "Selamat datang kembali, {$umkm->nama_usaha}!");
    }

    /**
     * Form registrasi UMKM baru.
     */
    public function createForm(): View
    {
        return view('kehadiran.register');
    }

    /**
     * Simpan UMKM baru + catat kehadiran pertamanya sekaligus.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'nama_usaha' => ['required', 'string', 'max:255'],
            'nama_pemilik' => ['required', 'string', 'max:255'],
            'no_hp' => ['required', 'string', 'max:20'],
            'alamat' => ['required', 'string'],
            'jenis_usaha' => ['required', 'string', 'max:255'],
            'produk_dijual' => ['required', 'string'],
        ]);

        $umkm = Umkm::create($data);

        Kehadiran::create([
            'umkm_id' => $umkm->id,
            'tanggal' => now()->toDateString(),
            'waktu' => now(),
        ]);

        return redirect()
            ->route('kehadiran.index')
            ->with('success', "Pendaftaran berhasil! Selamat datang, {$umkm->nama_usaha}.");
    }
}
