<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'sessions_old';

    /**
     * Run the migrations.
     * @table sessions
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('users_id');
            $table->unsignedInteger('cour_id');
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');

            $table->index(["users_id"], 'fk_sessions_users1_idx');

            $table->index(["cour_id"], 'fk_sessions_cours1_idx');


            $table->foreign('users_id', 'fk_sessions_users1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('cour_id', 'fk_sessions_cours1_idx')
                ->references('id')->on('cours')
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
