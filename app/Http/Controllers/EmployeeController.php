<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class EmployeeController extends Controller
{
    private array $conferences = [
        1 => [
            'id' => '1',
            'location' => 'Vilnius',
            'eventName' => 'Christmas Conference',
            'registeredUsers' => [
                'Alice Smith',
                'Bob Johnson',
                'Charlie Brown'
            ],
            'eventDate' => '1990-12-25',
            'createDate' => '1990-01-01',
            'info' => 'The Christmas Conference is a festive gathering in Vilnius, celebrating the holiday spirit with tech enthusiasts and industry leaders.'
        ],
        2 => [
            'id' => '2',
            'location' => 'Riga',
            'eventName' => 'Baltic Tech Summit',
            'registeredUsers' => [],
            'eventDate' => '2024-09-15',
            'createDate' => '1990-01-01',
            'info' => 'The Baltic Tech Summit aims to bring together innovators and entrepreneurs from the Baltic region, fostering collaboration and technological advancements.'
        ],
        3 => [
            'id' => '3',
            'location' => 'London',
            'eventName' => 'AI Innovation Forum',
            'registeredUsers' => [
                'Frank Miller',
                'Grace Wilson'
            ],
            'eventDate' => '2023-11-10',
            'createDate' => '1990-01-01',
            'info' => 'The AI Innovation Forum in London serves as a platform for discussing the latest trends and breakthroughs in artificial intelligence, gathering experts and visionaries.'
        ],
        4 => [
            'id' => '4',
            'location' => 'New York',
            'eventName' => 'Tech Expo',
            'registeredUsers' => [
                'Henry White',
                'Isabella Martinez',
                'Jack Brown',
                'Katherine Lee'
            ],
            'eventDate' => '2024-03-25',
            'createDate' => '1990-01-01',
            'info' => 'The Tech Expo in New York showcases cutting-edge technologies and provides a stage for tech enthusiasts to explore innovations across various industries.'
        ],
        5 => [
            'id' => '5',
            'location' => 'San Francisco',
            'eventName' => 'Developer Conference',
            'registeredUsers' => [
                'Liam Johnson',
                'Mia Garcia',
                'Noah Taylor'
            ],
            'eventDate' => '2024-06-05',
            'createDate' => '1990-01-01',
            'info' => 'The Developer Conference in San Francisco is a hub for developers, offering insights into the latest tools, languages, and best practices in software development.'
        ],
        6 => [
            'id' => '6',
            'location' => 'Berlin',
            'eventName' => 'Blockchain Summit',
            'registeredUsers' => [
                'Oliver Schmidt',
                'Sophie Wagner',
                'Lucas Müller'
            ],
            'eventDate' => '2023-08-18',
            'createDate' => '1990-01-01',
            'info' => 'The Blockchain Summit in Berlin convenes industry experts and enthusiasts to explore the potential of blockchain technology and its applications.'
        ],
        7 => [
            'id' => '7',
            'location' => 'Tokyo',
            'eventName' => 'Gaming Expo',
            'registeredUsers' => [
                'Yuki Tanaka',
                'Haruto Sato',
                'Airi Yamamoto',
                'Ren Nagano'
            ],
            'eventDate' => '2023-10-30',
            'createDate' => '1990-01-01',
            'info' => 'The Gaming Expo in Tokyo showcases the latest trends and innovations in the gaming industry, bringing together developers, publishers, and gamers.'
        ],
        8 => [
            'id' => '8',
            'location' => 'Sydney',
            'eventName' => 'Digital Marketing Conference',
            'registeredUsers' => [
                'Ella Wilson',
                'Connor Thompson'
            ],
            'eventDate' => '2024-05-12',
            'createDate' => '1990-01-01',
            'info' => 'The Digital Marketing Conference in Sydney offers insights into effective digital marketing strategies, trends, and tools for marketers.'
        ],
        9 => [
            'id' => '9',
            'location' => 'Paris',
            'eventName' => 'Fashion Tech Forum',
            'registeredUsers' => [
                'Aurélie Dubois',
                'Louis Lambert',
                'Chloé Martin'
            ],
            'eventDate' => '2023-09-20',
            'createDate' => '1990-01-01',
            'info' => 'The Fashion Tech Forum in Paris explores the intersection of fashion and technology, showcasing innovations shaping the future of the fashion industry.'
        ],
        10 => [
            'id' => '10',
            'location' => 'Singapore',
            'eventName' => 'Data Science Summit',
            'registeredUsers' => [
                'Ethan Lim',
                'Sophia Ng',
                'Aiden Tan',
                'Amelia Goh'
            ],
            'eventDate' => '2024-07-08',
            'createDate' => '1990-01-01',
            'info' => 'The Data Science Summit in Singapore brings together data scientists and analysts to share insights, techniques, and advancements in data science.'
        ],
        // More conferences can be added here following the same format
    ];

    public function index(): View{
        return view('employee.conferences', ['conferences' => $this->conferences]);
    }
    public function show(int $id): View
    {
        abort_if(!isset($this->conferences[$id]), 404);
        return view('employee.viewConference', ['conference' => $this->conferences[$id]]);
    }
}
