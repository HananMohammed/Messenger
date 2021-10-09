<?php

use Illuminate\Database\Migrations\Migration;
//use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    protected $connection = 'mongodb';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection($this->connection)->create('users', function (Blueprint $collection) {
            $collection->id();
            $collection->increments('user_id')->startingValue(1);
            $collection->string('name');
            $collection->string('email')->unique();
            $collection->timestamp('email_verified_at')->nullable();
            $collection->string('password');
            $collection->rememberToken();
            $collection->foreignId('current_team_id')->nullable();
            $collection->string('profile_photo_path', 2048)->nullable();
            $collection->timestamps();
            $collection->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection($this->connection)->dropIfExists('users');
        //DB::connection($this->connection)->drop(['users']);
    }
}
