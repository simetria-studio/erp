<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_suppliers', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('corporate_name')->nullable();
            $table->string('fantasy_name')->nullable();
            $table->string('type_person')->nullable();
            $table->string('document_number')->nullable();
            $table->string('tax_regime_code')->nullable();
            $table->date('customer_since')->nullable();
            $table->string('taxpayer')->nullable();
            $table->string('state_registration')->nullable();
            $table->string('ie_exempt')->nullable();
            $table->string('municipal_registration')->nullable();
            $table->string('rg')->nullable();
            $table->string('issuing_agency')->nullable();
            $table->string('client_type')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address2')->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('complement')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_suppliers');
    }
}
