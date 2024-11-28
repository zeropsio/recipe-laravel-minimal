<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        session()->save();

        $sessionsCount = DB::table('sessions')->count();

        return view('welcome', [
            'sessionsCount' => $sessionsCount
        ]);
    }
}
