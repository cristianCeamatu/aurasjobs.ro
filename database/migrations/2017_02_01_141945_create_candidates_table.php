<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('user_id');
            $table->enum('department', array('Restaurant/Bar','Chefs','Front-Desk','Housekeeping','Other','Sailors'));
            $table->string('position', 60)->nullable();
            $table->string('employer')->nullable();// for what interview/company is applying 
            $table->enum('lowerPosition', array('No', 'Yes'))->nullable()->default('No');
            $table->enum('cruiseExperience', array('No', 'Yes'))->nullable()->default('No');
            $table->string('name', 60);
            $table->string('birthdate', 50)->nullable();
            $table->string('address', 200)->nullable();
            $table->string('phone', 30);
            $table->string('email', 60);
            $table->string('country', 60)->nullable();
            $table->string('social', 150)->nullable();
            $table->string('photo', 200)->nullable();
            $table->string('cv', 200)->nullable();
            $table->string('recommendations', 200)->nullable();
            $table->string('languages', 200)->nullable();
            $table->text('skills')->nullable();
            $table->string('available', 80)->nullable();
            $table->string('salary', 80)->nullable();
            $table->text('education')->nullable();
            $table->text('jobs')->nullable();
            $table->string('positionExperience', 150)->nullable();
            $table->text('prescreening')->nullable();
            $table->string('prescreeningVideo')->nullable();//pre screening video
            $table->enum('status', array('active', 'employed', 'undecided', 'expired'))->nullable()->default('active');
            $table->text('extra')->nullable();
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
        Schema::dropIfExists('candidates');
    }
}
