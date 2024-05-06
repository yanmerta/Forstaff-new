<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FiturModel extends Model
{
    use HasFactory;
    protected $table = 'fitur';
    protected $primaryKey = 'fitur_id';
    protected $fillable = [
        'fitur_title',
        'subtitle_fitur',
        'image',
        'description'
    ];
}
