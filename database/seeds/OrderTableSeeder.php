<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     /*Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->foreign('customer_id')->references('id')->on('users');
            $table->string('name', 191);
            $table->string('address', 191);
            $table->string('phone', 191);
            $table->decimal('delivery_tax', 6, 2);
            $table->string('status', 20);
            $table->timestamps();
        });*/
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,20)as $index) {
            DB::table('orders')->insert([
                'name' => $faker ->company,
                'address' => $faker->isbn13,
                'phone'=> $faker->isbn13,
                'delivery_tax'=> $faker->isbn13,
                'status' => $faker->isbn13,  
            ]);
        }
    }
}
