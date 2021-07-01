<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraPhoneInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_phone_infos', function (Blueprint $table) {
            $table->id();
            $table->string('kleur', '20');
            $table->string('gewicht', '20');
            $table->string('besturingssysteem', '20');
            $table->string('scherm', '20');
            $table->string('schermgrootte', '20');
            $table->string('resolutie', '20');
            $table->string('cameras', '50');
            $table->string('aantalcameras', '20');
            $table->string('werkgeheugen', '10');
            $table->string('batterij', '20');
            $table->string('draadloos', '10');
            $table->string('vingerafdrukscanner', '30');
            $table->string('netwerk', '20');
            $table->string('introductiejaar', '20');
            $table->foreignId('telefoons_id', '20');
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
        Schema::dropIfExists('extra_phone_infos');
    }
}
