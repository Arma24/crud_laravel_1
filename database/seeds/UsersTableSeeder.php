<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 10 ; $i++) { 
                DB::table('users')->insert([
                    'nis'    => str_random(8),
                    'name'   => $faker->name,
                    'class'  => 'XII RPL 3',
                    'gender' => 'Perempuan',
                    'email'  => $faker->unique()->email,
                    ]);
        }    
    }
}
