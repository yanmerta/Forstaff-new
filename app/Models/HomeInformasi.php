<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeInformasi extends Model
{
    use HasFactory;
    protected $table = 'home_informasi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'sub_title',
        'description',
        'button_teks',
        'image',
        'image2'
    ];
}
