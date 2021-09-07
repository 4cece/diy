<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receipes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->text('content');
            $table->float('total_quantity', 8, 2, true);
            $table->foreignId('user_id')->constrained();
            $table->foreignId('level_id')->constrained();
            // $table->unsignedBigInteger('ingredient_id');
            // $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('receipes');
    }
}
