<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Conference;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index(): View{
        $conferences = Conference::with('users')->get();
        return view('employee.conferences', ['conferences' => $conferences]);
    }
    public function show(int $id): View
    {
        return view('employee.viewConference', [
            'conference' => Conference::findOrFail($id)
        ]);
    }
}
