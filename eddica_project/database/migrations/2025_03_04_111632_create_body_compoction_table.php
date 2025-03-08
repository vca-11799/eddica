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
        Schema::create('body_compoction', function (Blueprint $table) {
            $table->id();
            $table->decimal('soda', 8,2);
            $table->decimal('potash', 8,2);
            $table->decimal('jalor', 8,2);
            $table->decimal('sn1', 8,2);
            $table->decimal('sn2', 8,2);
            $table->decimal('mj2', 8,2);
            $table->decimal('rd2', 8,2);
            $table->decimal('t_clay', 8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('body_compoction');
    }
};
