<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraTeam extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_team', function($table)
        {
            $table->renameColumn('profesion', 'profession');
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_team', function($table)
        {
            $table->renameColumn('profession', 'profesion');
        });
    }
}
