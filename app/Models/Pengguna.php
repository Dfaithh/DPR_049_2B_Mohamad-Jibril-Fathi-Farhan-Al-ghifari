<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // penting untuk login
use Illuminate\Notifications\Notifiable;

class Pengguna extends Authenticatable
{
    use Notifiable;

    protected $table = 'pengguna'; // pakai tabel pengguna, bukan users

    protected $fillable = [
        'nama', 'email', 'password', 'role'
    ];

    protected $hidden = [
        'password',
    ];
}
