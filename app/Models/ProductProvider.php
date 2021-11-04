<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductProvider extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'provider_id',
        'provider_name',
        'cost_price',
    ];
}
