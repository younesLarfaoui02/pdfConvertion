<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email')->unique();
            $table->enum('sex', ['homme', 'femme']);	
            $table->string('cin');
            $table->string('cnss');
            $table->string('status_familiale');
            $table->integer('nb_enfants')->nullable();
            $table->string('tel');
            $table->string('fix');
            $table->text('adresse');
            $table->text('ville');
            $table->date('date_naissance');
            $table->string('fonction');
            $table->enum('type_contrat', ['stage', 'CDI','CDD']);	
            $table->date('date_entree');	
            $table->date('date_sortie');
            $table->float('base_salaire', 8, 2);
            $table->integer('heures_sup');
            $table->double('duree_cong');
            $table->string('nom_banque');		
            $table->string('rib');		
            $table->string('nom_urg');		
            $table->string('tel_urg');		
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
        Schema::dropIfExists('employees');
    }
}
