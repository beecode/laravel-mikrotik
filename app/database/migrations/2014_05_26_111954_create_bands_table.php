<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('rools', function(Blueprint $table) {
                    $table->increments('id');
                    $table->string('chain', 20);
                    $table->string('action', 20);
                    $table->string('protocol', 20);
                    $table->string('addresslist', 20);
                    $table->string('addresslisttimeout', 20);
                    $table->string('disable', 20);
                    $table->string('comment', 20);
                    $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('rools', function(Blueprint $table) {
                    //
            Schema::drop('rools');
                });
    }

}
