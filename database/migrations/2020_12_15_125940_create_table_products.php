<?php
//database/migrations
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //id, name, price, description
          //status, created_at, updated_at
          $table->increments('id');
          $table->string('name', 150);
          $table->integer('price');
          $table->text('description');
          $table->tinyInteger('status');
          //tạo cả created_at và updated_at
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
