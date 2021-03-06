<?php

namespace App\Http\Controllers;

use App\Models\Workouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class WorkoutController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware(function ($request, $next) {
            $this->user = Auth::user()->id;

            return $next($request);
        });
    }

    public function index(): \Inertia\Response
    {

        $workout = Workouts::all()->where('user_id', $this->user);

        return Inertia::render('Workout/Workouts',[
           'workouts' => $workout
        ]);
    }

    public function create()
    {
        return Inertia::render('Workout/create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }


}
