<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyUsersTableAddFields extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
    if (!Schema::hasColumn('users', 'username')) {
        $table->string('username')->unique()->after('name');
    }

   
    if (!Schema::hasColumn('users', 'telefono')) {
        $table->string('telefono')->nullable()->after('password');
    }

    if (!Schema::hasColumn('users', 'curp')) {
        $table->string('curp')->nullable()->after('telefono');
    }
});

    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username', 'role', 'telefono', 'curp']);
        });
    }
}
