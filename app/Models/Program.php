<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_access_id',
        'module_id',
        'program_name',
        'function_name',
        'program_route',
        'route_name',
        'controller_name',
        'method_get',
        'method_post',
        'method_delete',
    ];

    public function mainAccess()
    {
        return $this->belongsTo(MainAccess::class, 'main_access_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }
}
