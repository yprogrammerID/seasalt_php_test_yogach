<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifications')->insert([
            'title' => 'Pembayaran',
            'description' => 'pembayaran anda berhasil',
            'category' => 'PAYMENT',
            'user_id' => 1,
        ]);
        DB::table('notifications')->insert([
            'title' => 'Promo',
            'description' => 'deskripsi promo',
            'category' => 'PROMO',
        ]);
        DB::table('notifications')->insert([
            'title' => 'Pembayaran',
            'description' => 'pembayaran dibatalkan',
            'category' => 'PAYMENT',
            'user_id' => 1,
        ]);
        DB::table('notifications')->insert([
            'title' => 'Pembayaran',
            'description' => 'segera lakukan pembayaran',
            'category' => 'PAYMENT',
            'user_id' => 3,
        ]);
    }
}
