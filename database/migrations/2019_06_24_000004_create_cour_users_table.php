<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cour_user';

    /**
     * Run the migrations.
     * @table cour_user
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('cour_id');
            $table->unsignedInteger('user_id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');

            $table->index(["cour_id"], 'fk_cour_user_cours1_idx');

            $table->index(["user_id"], 'fk_cour_user_users1_idx');


            $table->foreign('cour_id', 'fk_cour_user_cours1_idx')
            // $table->foreign('cour_id')
                ->references('id')->on('cours')
                ->onDelete('no action')
                ->onUpdate('no action');

            // $table->foreign('users_id')
            $table->foreign('user_id', 'fk_cour_user_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
