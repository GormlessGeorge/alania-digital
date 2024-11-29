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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('town_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('street_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('building_type_id')->nullable()->constrained()->onDelete('set null');
            $table->string('house_number');
            $table->string('building')->nullable();
            $table->decimal('longitude', 10, 7);
            $table->decimal('latitude', 10, 7);
            $table->enum('status', ['На модерации', 'Опубликовано']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
