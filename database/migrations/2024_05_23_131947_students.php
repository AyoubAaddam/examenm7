<?php

use App\Models\Course;
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
            $table->string('name');
            $table->string('email')->unique();
            $table->dateTime('birthDate');
            $table->foreignIdFor(Course::class)->constrained();
            $table->timestamps();
        });

    }


    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
