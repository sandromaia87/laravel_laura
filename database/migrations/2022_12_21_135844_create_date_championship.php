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
            $table->id();
            $table->foreignId('idchamps')
                    ->constrained('championships')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->timestamp('date')
                    ->nullable();
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
