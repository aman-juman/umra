<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraContact6 extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_contact', function($table)
        {
            $table->renameColumn('gis', 'gis_link');
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_contact', function($table)
        {
            $table->renameColumn('gis_link', 'gis');
        });
    }
}
