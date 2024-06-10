<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tes extends Model
{
    use HasFactory;

    protected $table = 'tes';

    protected $fillable = [
        'nama',
        'personil_id',
        'hasil_kesehatan',
        'hasil_psikologi',
        'hasil_menembak',
    ];

    public function personil()
    {
        return $this->belongsTo(Personil::class, 'personil_id');
    }
}
