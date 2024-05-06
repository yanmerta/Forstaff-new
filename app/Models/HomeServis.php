<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeServis extends Model
{
    use HasFactory;
    protected $table = 'home_servis';
    protected $primaryKey = 'id';
    protected $fillable = [
        'servis_title',
        'servis_image',
        'servis_description'
    ];
}
