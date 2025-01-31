<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'Mobil yang di pinjam',
        'Tanggal Pinjam',
        'Tanggal Kembali',
        'status',
    ];
}
