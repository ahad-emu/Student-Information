<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Students', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('class');
          $table->string('section');
          $table->string('roll');
          $table->string('email')->unique();
          $table->timestamp('updated_at')->nullable();
          $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Students');
    }
}
