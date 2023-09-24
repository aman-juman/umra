<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraGallery extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_gallery', function($table)
        {
            $table->dropColumn('alt');
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_gallery', function($table)
        {
            $table->string('alt', 255);
        });
    }
}
