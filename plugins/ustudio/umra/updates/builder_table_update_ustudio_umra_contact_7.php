<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraContact7 extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_contact', function($table)
        {
            $table->string('email')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_contact', function($table)
        {
            $table->dropColumn('email');
        });
    }
}
