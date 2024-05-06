<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footer';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'nama_perusahaan',
        'alamat',
        'nomer_telepon',
        'email',
        'jam_kerja',
        'link_fb',
        'link_link',
        'link_ig',
        'link_twitter',
    ];
}
