<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('draws', function (Blueprint $table) {
            $table->bigInteger('draw_id')->autoIncrement();
            $table->string('draw_contact');
            $table->string('draw_way');
            $table->decimal('draw_amount');
            $table->unsignedBigInteger('user_id');
            $table->string('user_name');
            $table->boolean('confirmed')->default('0');
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
        Schema::dropIfExists('draws');
    }
}
