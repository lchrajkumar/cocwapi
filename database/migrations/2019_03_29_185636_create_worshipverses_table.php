<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorshipversesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worshipverses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chap_name');
            $table->integer('chap_number');
            $table->string('verse_range');
            $table->text('short_note')->nullable();
            $table->text('long_note')->nullable();
            $table->bigInteger('worshipinfo_id')->unsigned();
            $table->foreign('worshipinfo_id')->references('id')->on('worshipinfos')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
        Schema::dropIfExists('worshipverses');
    }
}
