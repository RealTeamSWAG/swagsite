<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('teamswag_appsforx_speakers', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->string('first_name', 255);
            $table->timestamps();
        });

        Schema::create('teamswag_appsforx_events', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('startDate');
            $table->integer('endDate');
            $table->integer('teamswag_appsforx_speaker_id')->unsigned();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teamswag_appsforx_events');
        Schema::dropIfExists('teamswag_appsforx_speakers');
    }
}
