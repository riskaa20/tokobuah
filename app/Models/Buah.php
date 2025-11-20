<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    protected $guarded = [];

    public function kategoriBuah()
    {
        return $this->belongTo(KategoriBuah::class, 'supplier_id');
    }
}
