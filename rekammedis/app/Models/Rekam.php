<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekam extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pasien() 
    {
        return $this->belongsTo(Pasien::class);
    }

    public function dokter() 
    {
        return $this->belongsTo(Dokter::class);
    }

    public function obat() 
    {
        return $this->belongsTo(Obat::class);
    }
    
    public function ruang() 
    {
        return $this->belongsTo(Ruang::class);
    }

}
