<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];

    public function KategoriBuah()
    {
        return $this->hasMany(KategoriBuah::class, 'supplier_id');
    }

    public function Buah()
    {
        return $this->hasMany(Buah::class, 'supplier_id');
    }
}
