<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KebijakanPrivasi extends Model
{
    use HasFactory;
    protected $table = 'kebijakan_privasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tentang_kami',
        'informasi',
        'tujuan',
        'hak',
        'link_eksternal',
        'keamanan',
        'hukum',
        'informasi_kontak',
    ];
}
