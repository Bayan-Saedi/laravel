<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            
        });

            Schema::create('academic_branch_product', function (Blueprint $table) {
            $table->integer('academic_branch_id');
            $table->integer('product_id');
            $table->primary(['academic_branch_id', 'product_id']);
        });

            Schema::create('academic_year_product', function (Blueprint $table) {
            $table->integer('academic_year_id');
            $table->integer('product_id');
            $table->primary(['academic_year_id', 'product_id']);
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
        Schema::dropIfExists('academic_branch_product');
        Schema::dropIfExists('academic_year_product');
    }
}
