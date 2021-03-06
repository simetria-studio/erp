<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'corporate_name',
        'fantasy_name',
        'logo_path',
        'address',
        'number',
        'zip_code',
        'address2',
        'city',
        'state',
        'country',
        'kind_of_person',
        'document_number',
        'state_registration',
        'municipal_registration',
        'phone1',
        'phone2',
        'email',
        'http',
        'contact_name',
        'economic_activity',
        'active',
    ];

    public function deposits()
    {
        return $this->hasMany(Deposit::class, 'company_id');
    }
    public function productsGroups()
    {
        return $this->hasMany(ProductGroup::class, 'company_id');
    }
    public function clientSuppliers()
    {
        return $this->hasMany(ClientSupplier::class, 'company_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'company_id');
    }
}
