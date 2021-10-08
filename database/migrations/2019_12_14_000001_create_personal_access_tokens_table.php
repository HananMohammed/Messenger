<?php

use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    protected $connection = 'mongodb';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->create('personal_access_tokens', function (Blueprint $collection) {
            $collection->bigIncrements('id');
            $collection->morphs('tokenable');
            $collection->string('name');
            $collection->string('token', 64)->unique();
            $collection->text('abilities')->nullable();
            $collection->timestamp('last_used_at')->nullable();
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
        Schema::connection($this->connection)->dropIfExists('personal_access_tokens');
    }
}
