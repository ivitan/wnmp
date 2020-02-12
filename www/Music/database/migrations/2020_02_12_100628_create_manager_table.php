<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //建表方法
        Schema::create('manager',function(Blueprint $table){
            //设计字段
            $table -> increments('id'); //主键字段
            $table -> string('username',20) -> notNull();
            $table -> string('password') -> notNull();
            $table -> enum('gender',[1,2,3]) -> notNull() -> default('1'); //性别，1-男，2-女，3-保密
            $table -> string('email',50);
            $table -> tinyInteger('role_id');//角色表中的id
            $table -> timestamps();//时间字段（系统自建）
            $table -> rememberToken();//实现记住登录状态字段，用于存储token
            $table -> enum('status',[1,2]) -> notNull() -> default('2');//1-禁用,2-启用
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //删表方法
        Schema::dropIfExists('manager');
    }
}
