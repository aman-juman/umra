<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraPost extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_post', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_post', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
