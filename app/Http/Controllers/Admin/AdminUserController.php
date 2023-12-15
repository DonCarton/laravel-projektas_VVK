<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    private array $users =
        [
            1 => [
                'id' => 1,
                'firstName' => 'Vardenis',
                'lastName' => 'Vardeninis',
                'email' => 'vardenis@mail',
                'username' => 'vardis',
                'userType' => 'client'
            ],
            2 => [
                'id' => 2,
                'firstName' => 'Pardenis',
                'lastName' => 'Pardeninis',
                'email' => 'pardenis@mail',
                'username' => 'pardis',
                'userType' => 'employee'
            ]
        ];
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        return view('admin.users', ['users' => $this->users]);
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
    public function show(string $id)
    {
        abort_if(!isset($this->users[$id]), 404);
        return view('admin.viewUser', ['user' => $this->users[$id]]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        abort_if(!isset($this->users[$id]), 404);
        return view('admin.editUser', ['user' => $this->users[$id]]);
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
