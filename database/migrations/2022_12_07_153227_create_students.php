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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);            
            $table->string('nis', 30);            
            $table->string('nisn', 30);            
            $table->string('kelas', 7)->nullable()->default(null);
            $table->string('tahun', 4);
            $table->string('ijazah', 255);            
            $table->string('skhun', 255);            
            $table->enum('status', ['active','inactive']);
            $table->softDeletes('deleted_at');
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
        Schema::dropIfExists('students');
    }
};
