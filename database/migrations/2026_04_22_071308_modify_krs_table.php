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
        Schema::table('krs', function (Blueprint $table) {
            $table->foreign('kode_matkul')->references('kode_matakuliah')->on('matakuliah')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('npm')->references('npm')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('krs', function (Blueprint $table) {
            $table->dropForeign('krs_kode_matkul_foreign');
            $table->dropColumn('kode_matkul');
            $table->dropForeign('krs_npm_foreign');
            $table->dropColumn('npm');
        });
    }
};
