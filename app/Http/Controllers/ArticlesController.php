<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    private array $articles =
    [
        1 => [
            'title' => 'First article',
            'content' => 'First article content',
            'is_new' => true,
            'authors' => [
                1 => [
                    'name' => 'Tim',
                    'surname' => 'Timmers'
                ],
                2 =>[
                    'name' => 'Ferry',
                    'surname' => 'Bouman'
                ]
            ]
        ],
        2 => [
            'title' => 'Second article',
            'content' => 'Second article content',
            'is_new' => false,
            'authors' => [
                1 =>[
                    'name' => 'Ferry',
                    'surname' => 'Bouman'
                ]
            ]
        ]
    ];
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('articles.index', ['articles' => $this->articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): View
    {
        abort_if(!isset($this->articles[$id]), 404);
        return view('articles.show', ['article' => $this->articles[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
