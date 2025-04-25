<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('expenses')) {
            DB::statement('
                UPDATE expenses 
                SET spent_at = CONCAT(DATE(spent_at), " 18:30:00") 
                WHERE spent_at IS NOT NULL AND TIME(spent_at) != "18:30:00"
            ');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Reverse action (if needed)
    }
};
