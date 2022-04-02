<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentas', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fechaini')->nullable();
            $table->timestamp('fechafin')->nullable();
            $table->integer('libro_id')->usigned();
            $table->integer('cliente_id')->usigned();
            $table->integer('status_id')->usigned();
            //$table->foreign('libro_id')->references('id')->on('libros');
            //$table->foreign('status_id')->references('id')->on('statuses');
            //$table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('rentas');
    }
};
