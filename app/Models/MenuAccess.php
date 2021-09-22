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

    public function mainAccess()
    {
        return $this->belongsTo(MainAccess::class, 'main_access_id');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'module_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }
}
