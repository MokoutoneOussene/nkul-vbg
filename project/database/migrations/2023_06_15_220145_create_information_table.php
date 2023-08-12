<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->String('code_unique')->nullable();
            $table->date('date_couverture')->nullable();
            $table->string('orientation_sexuel')->nullable();
            $table->string('type_violence_violation')->nullable();
            $table->string('nature_violence')->nullable();
            $table->string('identite_genre')->nullable();
            $table->string('pays')->nullable();
            $table->integer('age')->nullable();
            $table->string('let')->nullable();
            $table->string('occupation')->nullable();
            $table->string('ville')->nullable();
            $table->string('quartier')->nullable();
            $table->String('date_incident')->nullable();
            $table->string('lieu_incident')->nullable();
            $table->string('source_information')->nullable();
            $table->string('mode_collect')->nullable();
            $table->string('transition')->nullable();
            $table->string('etat_passing')->nullable();
            $table->string('auteur_violence')->nullable();
            $table->string('referer_pour')->nullable();
            $table->string('organisation_refere')->nullable();
            $table->longText('detail')->nullable();
            $table->longText('quest_ce_qui_ete_fait')->nullable();
            $table->longText('que_pensez_vous_ete_fait')->nullable();
            $table->longText('attentes_survivante')->nullable();
            $table->longText('quest_doit_etre_fait')->nullable();
            $table->longText('s_recu')->nullable();
            $table->longText('etat_actuel')->nullable();
            $table->longText('pense_srecu')->nullable();
            $table->string('ancien')->nullable();
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
        Schema::dropIfExists('information');
    }
};
