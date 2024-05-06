<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterKebijakan extends Model
{
    use HasFactory;
    protected $table = 'footer_kebijakan';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'kebijakan',
        'syarat',
        'icon_app1',
        'icon_app2',
    ];
}
