<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //ORM kibdl hadchi n sql
    public function up(): void
    {
        //creer tabkle f DB
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();// creer champ type id
            $table->morphs('tokenable');
            $table->string('name');
            // caracteres:64
            $table->string('token', 64)->unique();
            $table->text('abilities')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    //supprimer table
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
