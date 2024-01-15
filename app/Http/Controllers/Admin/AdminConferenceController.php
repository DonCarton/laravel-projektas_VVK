<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
//        $conferences = DB::table('conferences')->get();
        $conferences = Conference::with('users')->get();
        return view('admin.conferences', ['conferences' => $conferences]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.createConference');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'eventName' => 'required|max:255'
        ]);

        Conference::create($request->all());
        return redirect()->route('admin.conferences.index')
            ->with('success', __('app.object').' '.Str::of(__('actions.created'))->lower().' '.Str::of(__('actions.successfully'))->lower().'.');
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('admin.viewConference', [
            'conference' => Conference::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        return view('admin.editConference', [
            'conference' => Conference::findOrFail($id)
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
            'eventName' => 'required|max:255'
        ]);
        $conference = Conference::findOrFail($id);
        $conference->update($request->except(['_token','_method']));
        return redirect()->route('admin.conferences.edit', $conference->id)
            ->with('success', __('app.object').' '.Str::of(__('actions.updated'))->lower().' '.Str::of(__('actions.successfully'))->lower().'.');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();
        return redirect()->route('admin.conferences.index')
            ->with('successDelete', __('app.object').' '.Str::of(__('actions.deleted'))->lower().' '.Str::of(__('actions.successfully'))->lower().'.');
    }
}
