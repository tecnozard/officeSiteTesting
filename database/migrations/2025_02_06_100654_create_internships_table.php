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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->date('dob');
            $table->string('gender');
            $table->string('email');
            $table->string('phone');
            $table->string('alt_phone')->nullable();
            $table->text('current_address');
            $table->text('permanent_address')->nullable();
            $table->string('college');
            $table->string('degree');
            $table->string('year');
            $table->integer('graduation_year');
            $table->string('internship_type');
            $table->date('start_date');
            $table->string('experience');
            $table->string('payment_proof')->nullable();
            $table->string('resume')->nullable();
            $table->string('id_proof')->nullable();
            $table->boolean('terms_agreement')->nullable();
            $table->boolean('payment_confirmation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
