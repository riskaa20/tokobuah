<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriBuah extends Model
{
    protected $guarded = [];

    public function Supplier()
    {
        return $this->belongTo(Supplier::class, 'supplier_id');
    }
}
