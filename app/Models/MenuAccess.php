<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuAccess extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'main_access_id',
        'module_id',
        'program_id',
        'save_option',
        'change_option',
        'delete_option',
    ];
}
