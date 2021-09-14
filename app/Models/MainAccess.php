<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainAccess extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_name',
        'menu_route',
    ];
}
