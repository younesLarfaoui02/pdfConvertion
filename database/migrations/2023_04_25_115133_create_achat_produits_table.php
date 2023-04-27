<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAchatProduitsTable extends Migration
{

    public function up()
    {
        Schema::create('achat_produits', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->integer('quantity');
            $table->integer('prix');
            $table->integer('total_ht');
            $table->integer('total_ttc');
            $table->foreignId('produit_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    

    public function down()
    {
        Schema::dropIfExists('achat_produits');
    }
}
