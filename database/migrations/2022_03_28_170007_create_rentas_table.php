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
            $table->UnsignedBigInteger('libro_id')->nullable();
            $table->UnsignedBigInteger('cliente_id')->usigned()->nullable();
            $table->UnsignedBigInteger('status_id')->usigned()->nullable();

            $table->foreign('libro_id')->references('id')->on('libros')->ondelete('set null');
            //$table->foreign('status_id')->references('id')->on('statuses');
            $table->foreign('cliente_id')->references('id')->on('clientes') ->ondelete('set null');
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
