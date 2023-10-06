<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateActivitiesTable extends Migration
{

    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('activity');
            $table->string('activity_title');
            $table->string('activity_type');
            $table->unsignedBigInteger('profile_id');
            $table->date('activity_at')->default(DB::raw('CURRENT_DATE'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
}
