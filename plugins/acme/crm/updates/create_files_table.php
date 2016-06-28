<?php namespace Acme\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateFilesTable extends Migration
{

    public function up()
    {
        Schema::create('acme_crm_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('opportunity_id')->unsigned()->nullable()->index();
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->string('extention')->nullable();
            $table->text('description')->nullable();
            $table->string('path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_crm_files');
    }
}
