<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUstudioUmraFact extends Migration
{
    public function up()
    {
        Schema::create('ustudio_umra_fact', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('position')->nullable();
            $table->string('title')->nullable();
            $table->text('text')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ustudio_umra_fact');
    }
}
