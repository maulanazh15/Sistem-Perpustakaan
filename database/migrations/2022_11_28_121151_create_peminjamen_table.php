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
        
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('buku_id');
            $table->foreignUuid('user_id');
            $table->timestamp('tanggal_peminjaman');
            $table->timestamp('tanggal_pengembalian');
            $table->string('status_peminjaman');
            $table->timestamps();
        });
        // Schema::rename('peminjamen', 'peminjaman');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peminjaman');
    }
};
