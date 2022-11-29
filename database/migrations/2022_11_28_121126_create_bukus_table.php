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
        
        Schema::create('bukus', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('judul_buku');
            $table->string('penulis');
            $table->string('kategori');
            $table->string('penerbit');
            $table->integer('tahun_terbit');
            $table->string('isbn');
            $table->integer('jumlah_buku');
            $table->string('status_buku');
            $table->string('foto_buku')->nullable();
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
        Schema::dropIfExists('bukus');
    }
};
