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
        Schema::create('tanahs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('inventory_card')->nullable();
            $table->foreignId('project');
            $table->integer('price')->default(0)->nullable();;
            $table->string('location');
            $table->timestamp('date_buy')->nullable();
            $table->enum('condition', ['Baik', 'Rusak']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanahs');
    }
};
