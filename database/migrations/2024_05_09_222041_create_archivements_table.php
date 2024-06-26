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
        Schema::create('archivements', function (Blueprint $table) {
            $table->id();
			$table->string("title");
            $table->string("description");
			$table->string("date");
			$table->string("img_url");
			$table->string("category");
            $table->boolean("bln_active")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('archivements');
    }
};
