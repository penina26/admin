<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('reporter_name');
            $table->string('reporter_contact');
            $table->string('reporter_email');
            $table->string('reporter_location');
            $table->string('suspect_name');
            $table->string('suspect_designation');
            $table->string('suspect_organization');
            $table->string('suspect_details');
            $table->string('complaint_type');
            $table->string('attachments');

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
        Schema::dropIfExists('complaints');
    }
}
