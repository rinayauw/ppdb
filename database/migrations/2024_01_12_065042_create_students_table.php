<?php

use App\Models\Extracurricular;
use App\Models\Major;
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
            $table->date('birth');
            $table->string('gender');
            $table->string('religion');
            $table->text('address');
            $table->string('status');
            $table->foreignIdFor(Major::class)->constrained();
            $table->foreignIdFor(Extracurricular::class)->constrained();
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
