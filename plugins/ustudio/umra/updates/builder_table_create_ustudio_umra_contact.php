<?php namespace Ustudio\Umra\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUstudioUmraContact extends Migration
{
    public function up()
    {
        Schema::create('ustudio_umra_contact', function($table)
        {
            $table->string('phone')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('facebook')->nullable();
            $table->string('telegram')->nullable();
            $table->string('address')->nullable();
            $table->string('link_text_first')->nullable();
            $table->string('link_text_second')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ustudio_umra_contact');
    }
}
