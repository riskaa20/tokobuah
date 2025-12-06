<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // tambahkan kode auto-create admin
    protected static function booted()
    {
        if (!self::where('email', 'tokobuah@gmail.com')->exists()) {
            self::create([
                'name' => 'Admin',
                'email' => 'tokobuah@gmail.com',
                'password' => bcrypt('tokobuah'),
            ]);
        }
    }
}
