<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conferences')->insert([
        'location' => 'Vilnius',
        'eventName' => 'Christmas Conference',
        'eventDate' => '1990-12-25',
        'info' => 'The Christmas Conference is a festive gathering in Vilnius, celebrating the holiday spirit with tech enthusiasts and industry leaders.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
        DB::table('conferences')->insert([
        'location' => 'Riga',
        'eventName' => 'Baltic Tech Summit',
        'eventDate' => '2024-09-15',
        'info' => 'The Baltic Tech Summit aims to bring together innovators and entrepreneurs from the Baltic region, fostering collaboration and technological advancements.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
        DB::table('conferences')->insert([
        'location' => 'London',
        'eventName' => 'AI Innovation Forum',
        'eventDate' => '2023-11-10',
        'info' => 'The AI Innovation Forum in London serves as a platform for discussing the latest trends and breakthroughs in artificial intelligence, gathering experts and visionaries.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
        DB::table('conferences')->insert([
        'location' => 'New York',
        'eventName' => 'Tech Expo',
        'eventDate' => '2024-03-25',
        'info' => 'The Tech Expo in New York showcases cutting-edge technologies and provides a stage for tech enthusiasts to explore innovations across various industries.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
        DB::table('conferences')->insert([
        'location' => 'San Francisco',
        'eventName' => 'Developer Conference',
        'eventDate' => '2024-06-05',
        'info' => 'The Developer Conference in San Francisco is a hub for developers, offering insights into the latest tools, languages, and best practices in software development.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
        DB::table('conferences')->insert([
        'location' => 'Berlin',
        'eventName' => 'Blockchain Summit',
        'eventDate' => '2023-08-18',
        'info' => 'The Blockchain Summit in Berlin convenes industry experts and enthusiasts to explore the potential of blockchain technology and its applications.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
        DB::table('conferences')->insert([
        'location' => 'Tokyo',
        'eventName' => 'Gaming Expo',
        'eventDate' => '2023-10-30',
        'info' => 'The Gaming Expo in Tokyo showcases the latest trends and innovations in the gaming industry, bringing together developers, publishers, and gamers.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
        DB::table('conferences')->insert([
        'location' => 'Sydney',
        'eventName' => 'Digital Marketing Conference',
        'eventDate' => '2024-05-12',
        'info' => 'The Digital Marketing Conference in Sydney offers insights into effective digital marketing strategies, trends, and tools for marketers.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
        DB::table('conferences')->insert([
        'location' => 'Paris',
        'eventName' => 'Fashion Tech Forum',
        'eventDate' => '2023-09-20',
        'info' => 'The Fashion Tech Forum in Paris explores the intersection of fashion and technology, showcasing innovations shaping the future of the fashion industry.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
        DB::table('conferences')->insert([
        'location' => 'Singapore',
        'eventName' => 'Data Science Summit',
        'eventDate' => '2024-07-08',
        'info' => 'The Data Science Summit in Singapore brings together data scientists and analysts to share insights, techniques, and advancements in data science.',
            'created_at' => now(),
            'updated_at' => now(),
    ]);
    }
}
