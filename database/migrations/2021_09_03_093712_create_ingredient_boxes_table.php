<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngredientBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_boxes', function (Blueprint $table) {
            $table->float('quantity', 4, 2);
            $table->date('expiration_date');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('ingredient_id')->constrained();

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
        Schema::dropIfExists('ingredient_boxes');
    }
}
