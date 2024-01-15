<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $users = User::get();
        return view('admin.users', ['users' => $users]);
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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|max:255',
        ]);
        User::create($request->all());
        return redirect()->route('admin.users.index')
            ->with('success', __('app.object').' '.Str::of(__('actions.created'))->lower().' '.Str::of(__('actions.successfully'))->lower().'.');
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('admin.viewUser', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        return view('admin.editUser', [
            'user' => User::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $request->validate([
            'name' => 'required|max:255'
        ]);
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('admin.users.edit', $user->id)
            ->with('success', __('app.object').' '.Str::of(__('actions.updated'))->lower().' '.Str::of(__('actions.successfully'))->lower().'.');
    }

    /**
     * Remove the specified resource from storage.
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users.index')
            ->with('success', __('app.object').' '.Str::of(__('actions.deleted'))->lower().' '.Str::of(__('actions.successfully'))->lower().'.');
    }
}
