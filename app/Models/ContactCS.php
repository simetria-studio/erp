<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactCS extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'client_supplier_id',
        'contact_name',
        'phone1',
        'phone2',
        'contact_email',
    ];
}
