<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateUstudioUmraCompany extends Migration
{
    public function up()
    {
        Schema::table('ustudio_umra_company', function($table)
        {
            $table->text('content')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('ustudio_umra_company', function($table)
        {
            $table->text('content')->nullable(false)->change();
        });
    }
}
