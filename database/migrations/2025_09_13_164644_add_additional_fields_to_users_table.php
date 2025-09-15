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
        Schema::table('users', function (Blueprint $table) {
            $table->string('npm')->unique()->after('name');
            $table->string('fakultas')->after('npm');
            $table->string('prodi')->after('fakultas');
            $table->year('angkatan')->after('prodi');
            $table->string('nomor_telpon')->after('angkatan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['npm', 'fakultas', 'prodi', 'angkatan', 'nomor_telpon']);
        });
    }
};
