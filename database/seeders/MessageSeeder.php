<?php

namespace Database\Seeders;

use App\Models\Message;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [];

        for ($i = 1; $i < 6; $i++) {
            $topic = [
                'id' => $i,
                'user_name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'text' => fake()->paragraph(),
                'home_page' => fake()->url(),
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ];

            array_push($topics, $topic);
        }

        DB::table('messages')->insert([...$topics]);

        Message::factory(100)->create();
    }
}
