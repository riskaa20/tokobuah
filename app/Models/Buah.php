<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{

    public function KategoriBuah()
    {
        return $this->belongsTo(KategoriBuah::class);
    }

public function Supplier()
{
    return $this->belongsTo(Supplier::class);
}
}
