<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriBuah extends Model
{
    protected $guarded = [];

    public function buah()
    {
        return $this->hasMany(buah::class, 'supplier_id');
    }
}
