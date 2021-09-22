<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_access_id',
        'module_name',
        'module_route',
        'position',
    ];

    public function mainAccess()
    {
        return $this->belongsTo(MainAccess::class, 'main_access_id');
    }
}
