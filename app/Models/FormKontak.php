<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormKontak extends Model
{
    use HasFactory;

    protected $table = 'form_kontak';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'form_nama',
        'form_email',
        'form_subjek',
        'form_pesan',
        'form_code',
        'maps',
    ];
}
