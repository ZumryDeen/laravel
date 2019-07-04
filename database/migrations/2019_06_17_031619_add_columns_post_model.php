<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsPostModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_models', function (Blueprint $table) {

          /*  $table->bigIncrements('id');
            $table->string('title');
            $table->string('content');*/
// changing column datatype
            $table->bigInteger('user_id')->change();
            $table->integer('age');
        //    $table->timestamps();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_models', function (Blueprint $table) {

            $table->dropColumn('age');


        });
    }
}
