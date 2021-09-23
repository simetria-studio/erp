<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('main_access_id');
            $table->string('module_id');
            $table->string('program_name');
            $table->string('function_name');
            $table->string('program_route');
            $table->string('view_create')->nullable();
            $table->string('view_edit')->nullable();
            $table->string('route_name');
            $table->string('controller_name');
            $table->integer('posiiton');
            $table->string('method_get')->nullable();
            $table->string('method_post')->nullable();
            $table->string('method_put')->nullable();
            $table->string('method_delete')->nullable();
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
        Schema::dropIfExists('programs');
    }
}
