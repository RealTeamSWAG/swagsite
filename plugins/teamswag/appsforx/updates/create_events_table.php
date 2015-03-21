<?php namespace Teamswag\Appsforx\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateEventsTable extends Migration
{

    public function up()
    {
        Schema::create('teamswag_appsforx_speakers', function ($table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('first_name', 255);
            $table->timestamps();
        });

        Schema::create('teamswag_appsforx_events', function ($table) {
            $table->increments('id');
            $table->integer('startDate');
            $table->integer('endDate');
            $table->integer('speaker_id')->unsigned();
            $table->foreign('speaker_id')->references('id')->on('speakers');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teamswag_appsforx_events');
        Schema::dropIfExists('teamswag_appsforx_speakers');
    }
}
