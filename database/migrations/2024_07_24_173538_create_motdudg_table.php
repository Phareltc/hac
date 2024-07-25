<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotdudgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motdudg', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->text('dg');
            $table->text('missions');
            $table->text('description');
            $table->text('visions');
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
        Schema::dropIfExists('motdudg');
    }
}
