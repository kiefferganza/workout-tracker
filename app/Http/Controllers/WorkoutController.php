<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class WorkoutController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Workout/Workouts',[
           'workouts' => 23452435345
        ]);
    }
}
