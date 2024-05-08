<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak2 extends Model
{
    use HasFactory;

    protected $table = 'kontak2';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'email',
        'subjek',
        'pesan',
        'maps',
    ];
}