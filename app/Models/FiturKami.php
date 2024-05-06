<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturKami extends Model
{
    use HasFactory;
    protected $table = 'fitur_kami';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'title_fiturkami',
        'description',
        'image',
    ];
}