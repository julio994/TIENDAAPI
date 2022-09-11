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
        Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('customer_id')
                    ->nullable()
                    ->constrained('customers')
                    ->cascadeOnDelete();
            $table->foreignId('producto_id')
                    ->nullable()
                    ->constrained('productos')
                    ->cascadeOnDelete();
            $table->integer('cantidad');
            $table->decimal('subtotal', $precision = 8, $scale = 2);
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
        Schema::dropIfExists('carritos');
    }
};
