<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void /* Pra crear */
    {
        Schema::table('users', function (Blueprint $table) { /* lo que creemos se deve destruir $table->string('username'); */
            $table->string('username');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void /* Para que funcione el rolvad */
    {
        Schema::table('users', function (Blueprint $table) { /* lo que se destruye se deve crear $table->string('username'); */
            $table->dropColumn('username');
        });
    }
};
