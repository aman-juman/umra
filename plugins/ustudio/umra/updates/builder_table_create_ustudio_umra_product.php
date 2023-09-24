<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUstudioUmraProduct extends Migration
{
    public function up()
    {
        Schema::create('ustudio_umra_product', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->date('start')->nullable();
            $table->date('end')->nullable();
            $table->string('hotel')->nullable();
            $table->string('city')->nullable();
            $table->string('area')->nullable();
            $table->text('flight_steps')->nullable();
            $table->string('sim')->nullable();
            $table->integer('duration')->nullable()->unsigned();
            $table->text('meal')->nullable();
            $table->string('distance')->nullable();
            $table->integer('star')->nullable()->unsigned();
            $table->string('discount')->nullable();
            $table->string('price');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ustudio_umra_product');
    }
}
