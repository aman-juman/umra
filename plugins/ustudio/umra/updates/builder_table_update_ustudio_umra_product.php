<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraProduct extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_product', function($table)
        {
            $table->string('title', 10)->change();
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_product', function($table)
        {
            $table->string('title', 255)->change();
        });
    }
}
