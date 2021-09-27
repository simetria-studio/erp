<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientSupplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'corporate_name',
        'fantasy_name',
        'type_person',
        'document_number',
        'tax_regime_code',
        'customer_since',
        'taxpayer',
        'state_registration',
        'ie_exempt',
        'municipal_registration',
        'rg',
        'issuing_agency',
        'client_type',
        'zip_code',
        'state',
        'city',
        'address2',
        'address',
        'number',
        'complement',
        'status',
    ];

    public function contactCS()
    {
        return $this->hasMany(ContactCS::class, 'client_supplier_id');
    }
}
