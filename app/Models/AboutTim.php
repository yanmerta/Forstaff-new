<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutTim extends Model
{
    use HasFactory;
    protected $table = 'about_tim';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title_tim',
        'subtitle_tim',
    ];
}
