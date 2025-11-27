<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    // ... properti lainnya ...

    public function KategoriBuah() // <-- Nama ini harus sesuai!
    {
        return $this->belongsTo(KategoriBuah::class); // Contoh: belongsTo
    }

 // File: app/Models/Buah.php

public function Supplier()
{
    // Pastikan ini terdefinisi, misalnya:
    return $this->belongsTo(Supplier::class);

    // ATAU: return $this->hasOne(Supplier::class); // Tergantung relasinya
}
} 
