<?php namespace Acme\Crm\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateContactsTable extends Migration
{

    public function up()
    {
        Schema::create('acme_crm_contacts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('note')->nullable();
            $table->integer('opportunity_id')->unsigned()->nullable()->index();
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('acme_crm_contacts');
    }

}
