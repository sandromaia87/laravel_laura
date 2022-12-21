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
        Schema::create('date_championships', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->foreignId('idchamps')->constrained('championships');
            $table->timestamp('date');
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
        Schema::table('date_championships', function (Blueprint $table) {
            Schema::dropIfExists('date_championships');
        });
    }
};