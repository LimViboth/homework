<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('khmer_name', 255);
            $table->string('latin_name', 255)->nullable();
            $table->enum('gender', ['male', 'female', 'other'])->default('other');
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->string('tel', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
