<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontakKami extends Model
{
    use HasFactory;

    protected $table = 'kontak_kami';
    protected $primaryKey = 'id_kontak';
    protected $guarded = ['id_kontak'];

    protected $fillable = [
        'title',
        'subtitle',
        'alamat',
        'telepon',
        'email',
        'jam_kerja',
        'icon1',
        'icon2',
        'icon3',
        'icon4',
    ];
}