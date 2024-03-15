<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class TutorialController extends Controller
{
    public function index(Request $request): View
    {
        $posts = Posts::query()
            ->when(
                $request->q,
                function (Builder $builder) use ($request) {
                    $builder->where('name', 'like', "%{$request->q}%")
                        ->orWhere('email', 'like', "%{$request->q}%");
                }
            )
            ->simplePaginate(5);

        return view('posts', compact('posts'));
    }
}
