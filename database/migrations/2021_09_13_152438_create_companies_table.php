<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('corporate_name', 120); // razao social
            $table->string('fantasy_name', 120)->nullabe(); // nome fantasia
            $table->string('logo_path', 100)->nullabe(); // caminho do arquivo da logo
            $table->string('address', 100)->nullable(); // rua
            $table->integer('number')->nullable(); // numero
            $table->string('zip_code', 20)->nullable(); // codigo postal
            $table->string('address2', 100)->nullable(); // bairro
            $table->string('city', 50)->nullable(); // cidade
            $table->string('state', 50)->nullable(); // estado
            $table->string('country', 50)->nullable(); // pais
            $table->string('kind_of_person', 11); // tipo de pessoa
            $table->string('document_number', 50);
            $table->string('state_registration', 50)->nullable(); // registro estadual
            $table->string('municipal_registration', 50)->nullable(); // registro municipal
            $table->string('phone1', 20); // telefone
            $table->string('phone2', 20)->nullable(); // celular
            $table->string('email', 100)->nullable();
            $table->string('http', 150)->nullable(); // site
            $table->string('contact_name', 100)->nullable(); // nome para contato
            $table->string('economic_activity', 100)->nullable(); // atividade economica
            $table->char('active', 1)->default('S');
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
        Schema::dropIfExists('companies');
    }
}
