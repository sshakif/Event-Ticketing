<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->nullable();
            $table->string('title');
            $table->text('short_description')->nullable();
            $table->longtext('description')->nullable();
            $table->string('ticket_price')->nullable();
            $table->string('event_address')->nullable();
            $table->string('map_location')->nullable();
            $table->date('event_start_date')->nullable();
            $table->date('event_end_date')->nullable();
            $table->time('event_start_time')->nullable();
            $table->time('event_end_time')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_image2')->nullable();
            $table->string('banner_image3')->nullable();
            $table->string('slider_image')->nullable();
            $table->boolean('status')->default(1);

            $table->bigInteger("created_by")->unsigned()->nullable();
            $table->bigInteger("updated_by")->unsigned()->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
