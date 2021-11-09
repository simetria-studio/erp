<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_product_id')->nullable();
            $table->integer('company_id');
            $table->string('product_name');
            $table->string('sku')->nullable();
            $table->string('product_type');
            $table->string('sales_format');
            $table->string('unit_dimension');
            $table->float('sale_price');
            $table->string('liquid_weight')->nullable();
            $table->string('gross_weight')->nullable();
            $table->string('items_box')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('depth')->nullable();
            $table->string('measure');
            $table->string('gtin_ean')->nullable();
            $table->string('gtin_ean_tax')->nullable();
            $table->string('production');
            $table->string('condition');
            $table->integer('deposit_id')->nullable();
            $table->string('stock_min')->nullable();
            $table->string('stock_max')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('purchase_price')->nullable();
            $table->string('source');
            $table->string('ncm')->nullable();
            $table->string('cest')->nullable();
            $table->string('item_type')->nullable();
            $table->string('tax_percentage')->nullable();
            $table->string('product_group');
            $table->string('base_value_icms_st')->nullable();
            $table->string('value_icms_st')->nullable();
            $table->string('substitute_icms_value')->nullable();
            $table->string('tipi_exception_code')->nullable();
            $table->string('fixed_pis_value')->nullable();
            $table->string('fixed_cofins_value')->nullable();
            $table->text('add_information')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}
