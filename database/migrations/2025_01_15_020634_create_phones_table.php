<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Membuat migration baru untuk tabel 'phones'
return new class extends Migration
{
    /**
     * Menjalankan migration untuk membuat tabel 'phones'.
     */
    public function up()
    {
        // Membuat tabel 'phones' dengan struktur berikut:
        Schema::create('phones', function (Blueprint $table) {
            $table->id(); // Membuat kolom 'id' sebagai primary key.
            $table->unsignedBigInteger('user_id'); // Kolom 'user_id' sebagai foreign key untuk tabel 'users'.
            $table->string('phone'); // Kolom 'phone' untuk menyimpan nomor telepon dalam format string.
            $table->timestamps(); // Kolom 'created_at' dan 'updated_at' otomatis untuk mencatat waktu.

            // Menambahkan constraint foreign key:
            // - 'user_id' merujuk ke kolom 'id' di tabel 'users'.
            // - Jika data user dihapus, maka data di tabel 'phones' yang terkait juga akan dihapus (cascade).
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Membalikkan (menghapus) migration ini.
     */
    public function down(): void
    {
        // Menghapus tabel 'phones' jika ada.
        Schema::dropIfExists('phones');
    }
};
