<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void 
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('vocab_id')->references('id')->on('vocabs')->onUpdate('cascade')->onDelete('cascade');
            $table->string('status'); //notlearned (default), learned
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
        Schema::dropIfExists('trains');
    }
}
