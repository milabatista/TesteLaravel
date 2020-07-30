<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',191);
            $table->string('email',100)->unique();
            $table->string('password',191);
            $table->rememberToken();
            $table->timestamps();
        });*/

        $faker = Faker::create();
        foreach(range(1,20)as $index){
            DB::table('users')->insert([
                'name' => $faker->company,
                'email' => $faker ->isbn13,
                'password' => $faker->isbn13,
            ]);
        }



    }
}
