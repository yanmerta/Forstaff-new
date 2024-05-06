<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterInformasi extends Model
{
    use HasFactory;
    protected $table = 'footer_informasi';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'faq',
        'kontak_kami',
    ];
}
