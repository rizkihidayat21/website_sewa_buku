<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telepon extends Model
{
    use HasFactory;

    protected $table = 'telepon';
    protected $primary = 'id_peminjam';
    protected $fillable = ['id_peminjam', 'nomor_telepon'];

    public function peminjam(){
        return $this->belongsTo('App\Models\dataPeminjam', 'id');
    }
}
