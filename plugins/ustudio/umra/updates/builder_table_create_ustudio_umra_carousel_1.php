<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUstudioUmraCarousel1 extends Migration
{
    public function up()
    {
        Schema::create('ustudio_umra_carousel_1', function($table)
        {
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ustudio_umra_carousel_1');
    }
}
