<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    protected $table = 'buah';

    protected $fillable = [
        'nama_buah',
        'id_kategori',
        'id_supplier',
        'stok',
        'harga'
    ];

    public function kategori() {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'id_supplier');
    }
}
