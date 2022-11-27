<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrasaranaRuang extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $table = 'erp_prasarana_ruang';

    public function bangunan()
    {
        return $this->belongsTo(PrasaranaBangunan::class, 'id_bangunan');
    }
}
