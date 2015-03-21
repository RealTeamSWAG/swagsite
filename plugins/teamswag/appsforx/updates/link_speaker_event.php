<?php namespace RainLab\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class linkSpeakerEvent extends Migration
{

    public function up()
    {
        Schema::table('teamswag_appsforx_speakers', function ($table) {
            $table->integer('event_id');
        });
    }

    public function down()
    {
        Schema::table('teamswag_appsforx_speakers', function ($table) {
            $table->dropColumn('event_id');
        });
    }
}
