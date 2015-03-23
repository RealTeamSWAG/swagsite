<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class linkSessionSpeaker extends Migration
{

    public function up()
    {
        Schema::table('teamswag_appsforx_speakers', function ($table) {
            $table->integer('session_id');
        });
    }

    public function down()
    {
        Schema::table('teamswag_appsforx_speakers', function ($table) {
            $table->dropColumn('session_id');
        });
    }
}
