<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    public function up()
    {
        Schema::create('student', function($table){
            $table->string('LRN', 12)->primary();
            $table->string('first_name', 60);
            $table->string('middle_name', 60);
            $table->string('last_name', 60);
            $table->string('address', 60);
            $table->string('mother_fullname', 60);
            $table->string('father_fullname', 60);
            $table->string('contact_num', 11);
        });
    }

    public function down()
    {
        Schema::drop('student');
    }
}
