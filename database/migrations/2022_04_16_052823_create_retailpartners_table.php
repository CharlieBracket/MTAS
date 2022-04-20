<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetailpartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('retail_partners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rp_code');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('user_id')->unsigned(); 
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('retail_partners', function (Blueprint $table) {
            Schema::dropIfExists('retail_partners');
        });
    }
}
