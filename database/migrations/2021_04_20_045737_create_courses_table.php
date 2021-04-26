<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            //atributo de ue usuario ha creado el curso
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');

            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('description');

            $table->timestamps();

            //se realizan las relaciones foraneas
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
