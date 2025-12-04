<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    protected $fillable = [
        'nama_buah',
        'harga',
        'stok',
        'kategori_id',
        'supplier_id'
    ];

    public function KategoriBuah()
    {
        return $this->belongsTo(KategoriBuah::class);
    }

    public function Supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
