<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    protected $connection='mongodb';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->create('messages', function (Blueprint $collection) {
            $collection->id();
            $collection->integer('from')->unsigned();
            $collection->integer('to')->unsigned();
            $collection->text('message')->unsigned();
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)->dropIfExists('messages');
    }
}
