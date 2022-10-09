<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'diki',
            'age' => 24
        ]);
        DB::table('users')->insert([
            'name' => 'indra',
            'age' => 28
        ]);
        DB::table('users')->insert([
            'name' => 'feby',
            'age' => 21
        ]);
    }
}
