<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 100)->unique()->comment('codigo');
            $table->string('nombre', 100)->comment('nombre');
            $table->string('descripcion', 100)->comment('descripcion');
            $table->double('precio')->comment('precio');
            $table->integer('stock')->comment('precio');
            $table->string('imagen', 100)->comment('imagen');
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
        Schema::dropIfExists('products');
    }
}
