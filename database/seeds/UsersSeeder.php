<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            [
                'id' => 1,
                'name' => '悦史',
                'password' => 'etsushi',
                'token' => 'token',
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
