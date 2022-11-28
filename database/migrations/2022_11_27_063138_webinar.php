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
            $table->string('Judul_Webinar');
            $table->date('Tanggal');
            $table->string('Desc_Webinar');
            $table->string('Pemateri_Webinar');
            $table->string('Cover');
            $table->enum('status', ['Akan datang', 'Berlangsung','Selesai']);
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
