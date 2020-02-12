<?php

use Illuminate\Database\Seeder;

class ManagerTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //产生faker实例
        $faker = \Faker\Factory::create('zh_CN');
        //循环生成数据
        $data = [];
        for ($i =0;$i < 50; $i++){
            $data[] = [
                "username"      => $faker -> userName,
                "password"      => bcrypt('vitan123'),//使用框架内置bcrypt方式加密
                "gender"        => rand(1,3),
                //"mobile" => $faker -> phoneNumber,
                "email"         => $faker -> email,
                "role_id"       => rand(1,6),
                "created_at"     => date('Y-m-d H:i:s',time()),
                "status"        => rand(1,2),
            ];

        }
        DB::table('manager') -> insert($data);
    }
}
