<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 'pesan';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['pengguna', 'kendaraan_id', 'pengemudi_id', 'lokasi', 'waktu', 'status'];
    
    public function kendaraan(){
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id', 'id');
    }

    public function pengemudi(){
        return $this->belongsTo(Pengemudi::class, 'pengemudi_id', 'id');
    }
}
