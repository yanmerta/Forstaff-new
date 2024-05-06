<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeButton extends Model
{
    use HasFactory;
    protected $table = 'home_button';
    protected $primaryKey = 'id';
    protected $fillable = [
        'button_teks',
        'button_image'
    ];
}
