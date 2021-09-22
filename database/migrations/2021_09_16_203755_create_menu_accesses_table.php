<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_accesses', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('main_access_id');
            $table->string('module_id');
            $table->string('program_id');
            $table->string('save_option')->nullable();
            $table->string('change_option')->nullable();
            $table->string('delete_option')->nullable();
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
        Schema::dropIfExists('menu_accesses');
    }
}
