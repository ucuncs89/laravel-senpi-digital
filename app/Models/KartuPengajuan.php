<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KartuPengajuan extends Model
{
    use HasFactory;

    protected $table = 'kartu_pengajuan';


    protected $fillable = [
        'id_kartu',
        'tanggal_pengajuan',
        'id_personil',
        'id_senjata',
        'status',
        'status_description',
        'berlaku_sampai_dengan',
        'tanggal_update',
        'update_by',
    ];

    public function personil()
    {
        return $this->belongsTo(Personil::class, 'id_personil');
    }

    public function senjata()
    {
        return $this->belongsTo(Weapon::class, 'id_senjata');
    }
}
