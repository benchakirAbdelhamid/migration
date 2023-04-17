<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nom')->default('hamid');
            $table->string('prenom',50);
            $table->integer('age');
            $table->boolean('etat')->default(0);
            $table->unsignedInteger('votes');
            $table->timestamps();
        });
        // Schema::table('stagiaires', function (Blueprint $table) {
        //     $table->strng('nom',50)->change();
        // });
        // modificateur : ->after('column')
        // ->autoncrement()
        // ->first()
        // ->nullable()
        // ->unsigned()
        // ->useCuttent()
        // ->useCuttentOnUpdate()
    }
    // php artisan migrate
    // php artisan migrate:rollback

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
