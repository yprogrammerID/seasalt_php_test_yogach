<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationReadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notification_reads')->insert([
            'is_read' => 1,
            'notification_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('notification_reads')->insert([
            'is_read' => 1,
            'notification_id' => 2,
            'user_id' => 1,
        ]);
        DB::table('notification_reads')->insert([
            'is_read' => 1,
            'notification_id' => 3,
            'user_id' => 3,
        ]);
        DB::table('notification_reads')->insert([
            'is_read' => 1,
            'notification_id' => 3,
            'user_id' => 2,
        ]);
    }
}
