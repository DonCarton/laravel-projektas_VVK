<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function index(): View{
        $conferences = Conference::with('users')->where('eventDate','>',\Carbon\Carbon::now())->get();
        return view('client.conferences', ['conferences' => $conferences]);
    }
    public function show(int $id): View
    {
        return view('client.viewConference', [
            'conference' => Conference::findOrFail($id)
        ]);
    }

    /**
     * Show the form for registering for a chosen event.
     */
    public function registerForConference(Request $request): RedirectResponse
    {

//        $conference = Conference::findOrFail($id);
//
//        $conference->users()->attach($id);

        $conference = Conference::findOrFail($request->input('conferenceID'));

        $conference->users()->attach($request->input('userID'));

        return redirect('client')->with('success', 'Successfully registered.');

//        abort_if(!isset($this->conferences[$id]), 404);
//        return view('client.registerForConference', ['conference' => $this->conferences[$id]]);
    }

}
