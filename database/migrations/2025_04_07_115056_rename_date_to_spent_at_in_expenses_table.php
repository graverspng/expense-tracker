<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('expenses', function (Blueprint $table) {
            if (!Schema::hasColumn('expenses', 'spent_at')) {
                $table->dateTime('spent_at')->nullable();
            }
        });  
    }
    
    

    public function down(): void
    {
        Schema::table('expenses', function (Blueprint $table) {
            if (Schema::hasColumn('expenses', 'spent_at')) {
                $table->renameColumn('spent_at', 'date');
                $table->date('date')->change();
            }
        });
    }
};
