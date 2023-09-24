<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraContact5 extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_contact', function($table)
        {
            $table->string('gis')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_contact', function($table)
        {
            $table->dropColumn('gis');
        });
    }
}
