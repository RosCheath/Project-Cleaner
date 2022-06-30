<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BecomCleaners extends Model
{
    use HasFactory;
    public $fillable = [
        'name','price','title1','title2','title3','title4',
    ];
}
