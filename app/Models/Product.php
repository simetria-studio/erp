<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_product_id',
        'product_name',
        'company_id',
        'sku',
        'product_type',
        'sales_format',
        'unit_dimension',
        'sale_price',
        'liquid_weight',
        'gross_weight',
        'items_box',
        'width',
        'height',
        'depth',
        'measure',
        'gtin_ean',
        'gtin_ean_tax',
        'production',
        'condition',
        'deposit_id',
        'stock_min',
        'stock_max',
        'quantity',
        'purchase_price',
        'source',
        'ncm',
        'cest',
        'item_type',
        'tax_percentage',
        'product_group',
        'base_value_icms_st',
        'value_icms_st',
        'substitute_icms_value',
        'tipi_exception_code',
        'fixed_pis_value',
        'fixed_cofins_value',
        'add_information',
        'short_description',
        'description',
        'status',
    ];

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }

    public function providers()
    {
        return $this->hasMany(ProductProvider::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function productVariations()
    {
        return $this->hasMany(Product::class, 'parent_product_id');
    }

    public function parentVariations()
    {
        return $this->hasMany(Variation::class, 'product_id');
    }

    public function variations()
    {
        return $this->hasMany(Variation::class, 'parent_product_id');
    }

    public function deposit()
    {
        return $this->hasOne(Deposit::class, 'id', 'deposit_id');
    }
}
