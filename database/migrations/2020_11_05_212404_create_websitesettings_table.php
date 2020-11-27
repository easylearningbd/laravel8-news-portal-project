<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websitesettings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->text('address_en')->nullable();
            $table->text('address_hin')->nullable();
            $table->string('phone_en')->nullable();
            $table->string('phone_hin')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('websitesettings');
    }
}
