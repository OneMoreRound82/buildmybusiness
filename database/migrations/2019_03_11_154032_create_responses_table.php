<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('responses', function (Blueprint $table) {
              $table->increments('id');
            $table->unsignedInteger('project_id')->unsigned();
            $table->unsignedInteger('task_id')->unsigned();
            $table->unsignedInteger('action_id');
            $table->text('response');
            $table->string('table_name');
            
            $table->timestamps();

           
            
            $table->foreign('project_id')->references('id')->on('projects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('responses');
    }
}
