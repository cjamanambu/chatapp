<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('social_type')->nullable()->after('remember_token');
            $table->string('social_id')->nullable()->after('social_type');
            $table->string('firstname')->nullable()->after('social_id');
            $table->string('lastname')->nullable()->after('firstname');
            $table->string('avatar')->nullable()->after('lastname');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
