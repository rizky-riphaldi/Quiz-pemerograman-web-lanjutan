<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('user_id');
            $table->string('user_email', 50);
            $table->string('user_password', 50);
            $table->string('user_nama', 50);
            $table->text('user_alamat');
            $table->string('user_hp', 25);
            $table->string('user_pos', 5);
            $table->tinyInteger('user_role');
            $table->tinyInteger('user_aktif');
            $table->timestamps($precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
};
