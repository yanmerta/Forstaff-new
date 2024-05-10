<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePromosi extends Model
{
    use HasFactory;
    protected $table = 'home_promosi';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'sub_title',
        'button_teks'
    ];
}
