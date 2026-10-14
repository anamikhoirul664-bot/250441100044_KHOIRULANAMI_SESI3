<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $table = 'kendaraan';

    protected $fillable = [
        'kendaraan_id',
        'plat nomor',
        'merek',
        'jenis',
        'tarif perhari',
    ];

    public function sewas()
    {
        return $this->belongsTo(sewa::class, 'sewa_id');
    }

}
