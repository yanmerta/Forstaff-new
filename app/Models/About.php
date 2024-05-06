<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $about = 'about';
    protected $primaryKey = 'id_about';
    protected $fillable = [
        'title_about',
        'subtitle_about',
        'description',
        'image'
    ];
}
