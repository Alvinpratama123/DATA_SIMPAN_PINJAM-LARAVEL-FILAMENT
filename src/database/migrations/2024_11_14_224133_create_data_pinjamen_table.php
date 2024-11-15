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
        Schema::create('data_pinjamen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('jumlah', 12, 2);
            $table->date('tanggal_pinjam');
            $table->decimal('bunga', 12, 2);
            $table->enum('status', ['ACTIVE', 'NONACTIVE'])->default('ACTIVE');
            $table->integer('jangka_waktu');
            $table->text('keterangan');
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pinjamen');
    }
};
