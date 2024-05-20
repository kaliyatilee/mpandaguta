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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
			$table->string("firstname");
            $table->string("lastname");
			$table->string("birth_certificate_number");
			$table->string("class");
			$table->string("grade");
			$table->string("guardian_phone");
			$table->string("guardian_name");
			$table->string("relationship");
			$table->string("gender");
			$table->string("home_address");
            $table->boolean("bln_active")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
