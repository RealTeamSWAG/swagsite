<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSessionsTable extends Migration
{

    public function up()
    {
        Schema::table('teamswag_appsforx_speakers', function($table)
        {
            $table->string('description', 1024)->nullable()->change();
        });
    }

    public function down()
    {

    }
}