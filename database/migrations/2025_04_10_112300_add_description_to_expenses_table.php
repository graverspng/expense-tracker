<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasColumn('expenses', 'description')) {
            Schema::table('expenses', function (Blueprint $table) {
                $table->text('description')->nullable()->after('amount');
            });
        }
    }
    

    public function down(): void
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
};