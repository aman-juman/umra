<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraContact4 extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_contact', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_contact', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
