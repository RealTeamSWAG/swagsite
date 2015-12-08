<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class UpdateNullableSlug extends Migration
{

    public function up()
    {
        Schema::table('teamswag_appsforx_sessions', function($table)
        {
            $table->string('slug')->nullable()->change();
        });
    }

    public function down()
    {
    }
}