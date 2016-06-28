<?php namespace Acme\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateReportsTable extends Migration
{

    public function up()
    {
        Schema::create('acme_crm_reports', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('opportunity_id')->unsigned()->nullable()->index();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->date('starting')->nullable();
            $table->date('finishing')->nullable();
            $table->decimal('investment')->nullable();
            $table->decimal('profit')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_crm_reports');
    }

}
