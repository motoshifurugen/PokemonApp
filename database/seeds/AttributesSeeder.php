<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder {
    public function run() {
        DB::table('attributes')->insert([
          ['name' => Str::random(10)],
          ['name' => Str::random(10)]
        ]);
    }
}
