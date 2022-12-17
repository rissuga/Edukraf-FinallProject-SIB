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
        Schema::create('webinar', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('date');
            $table->text('desc');
            $table->string('speaker');
            $table->string('cover');
            $table->string('link_record')->nullable();
            $table->string('link_webinar')->nullable();
            $table->string('time_start')->nullable();
            $table->string('time_end')->nullable();
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
        Schema::dropIfExists('webinar');
    }
};
