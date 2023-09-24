<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraProduct2 extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_product', function($table)
        {
            $table->string('hotel', 30)->change();
            $table->string('city', 50)->change();
            $table->string('area', 60)->change();
            $table->string('sim', 50)->change();
            $table->string('discount', 50)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_product', function($table)
        {
            $table->string('hotel', 255)->change();
            $table->string('city', 255)->change();
            $table->string('area', 255)->change();
            $table->string('sim', 255)->change();
            $table->string('discount', 255)->change();
        });
    }
}
