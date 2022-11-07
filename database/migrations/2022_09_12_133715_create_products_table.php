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
            $table->string('name');
            $table->integer('quantityinstock')->nullable();
            $table->enum('status', array('available', 'unavailable'));
            $table->foreignId('gender_categories_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('shape_categories_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('color_categories_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('size_categories_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('glass_categories_id')->nullable()->constrained()->onDelete('cascade');
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
