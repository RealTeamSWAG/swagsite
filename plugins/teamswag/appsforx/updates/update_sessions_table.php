<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateSessionsTable extends Migration
{

    public function up()
    {
        Schema::table('teamswag_appsforx_sessions', function($table)
        {
            $table->string('color')->nullable()->add();
            $table->string('is_global')->add();
        });
    }

    public function down()
    {

    }
}