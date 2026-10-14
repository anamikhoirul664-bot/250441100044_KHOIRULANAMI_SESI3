<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sewacontroller extends Controller
{
    private function datasewa()
    {
        return sewa::with('kendaraan')->get()->map(function ($buku) {
            return [
                'sewa_id' => $sewa->id,
                'nama_penyewa' => $sewa->nama_penyewa,
                'tanggal_mulai' => $sewa->tanggal_mulai,
                'lama_sewa' => $sewa->lama_sewa,
                'total_biaya' => $sewa->kendaraan->total_biaya,
                'status' => $sewa->kendaraan->status,
            ];
        })->toArray();
    }

    public function index()
    {
        $sewa = $this->datakendaraan();

        return view('sewa.index', compact('sewa'));
    }

        public function show($id)
    {
        $sewa = collect($this->datasewa())
            ->firstWhere('id', (int) $id);

        return view('sewa.show', compact('sewa'));
    }


}
