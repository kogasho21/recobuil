<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageBuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('builders', function (Blueprint $table) {
            $table->string('photo1');
            $table->string('photo2');
            $table->string('photo3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('builders', function (Blueprint $table) {
            $table->dropColumn('photo1');
            $table->dropColumn('photo2');
            $table->dropColumn('photo3');
       });
    }
}
