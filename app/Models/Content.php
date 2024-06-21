<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = [
        'title1',
        'title2',
        'title3',
        'title4',
        'asset1',
        'asset2',
        'asset3',
        'hero1',
        'hero2'
    ];
}
