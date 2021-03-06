<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budjet extends Model
{
    use HasFactory;

    protected $guarded=['id'];
    protected $table='budjets';

    public function pengadaan_barang(){
        return $this->hasMany(PengadaanBarang::class);
    }
}
