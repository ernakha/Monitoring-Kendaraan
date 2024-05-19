<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengemudi extends Model
{
    use HasFactory;
    protected $table = 'pengemudi';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['nama', 'telp', 'alamat', 'usia'];
}
