<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'sewas';

    protected $fillable = [
        'sewa_id',
        'kendaraan_id',
        'nama_penyewa',
        'tanggal_mulai',
        'lama_sewa',
        'total_biaya',
        'status',

        
        
    ];

    public function kendaraans()
    {
        return $this->hasMany(kendaraan::class, 'kendaraan_id');
    }
}
