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

        for ($i = 1; $i < 100; $i++) {
            $topic = [
                'id' => $i,
                'user_name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'text' => fake()->paragraph(),
                'home_page' => fake()->url(),
                'created_at' => Carbon::createFromTimestamp(time() + ($i * 10)),
            ];

            array_push($topics, $topic);
        }

        DB::table('messages')->insert([...$topics]);

//        Message::factory(200)->create();

        $topics_secondary = [];

        for ($i = 1; $i < 300; $i++) {
            $topic = [
                'message_id' => fake()->numberBetween(1, 100),
                'user_name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'text' => fake()->paragraph(),
                'home_page' => fake()->url(),
                'created_at' => Carbon::createFromTimestamp(time() + ($i * 1000)),
            ];

            array_push($topics_secondary, $topic);
        }

        DB::table('messages')->insert([...$topics_secondary]);
    }
}
