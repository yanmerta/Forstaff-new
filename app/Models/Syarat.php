<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syarat extends Model
{
    use HasFactory;

    protected $table = 'syarat';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    protected $fillable = [
        'description1',
        'description2',
    ];
}