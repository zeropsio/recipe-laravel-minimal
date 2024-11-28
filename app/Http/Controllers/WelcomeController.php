<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class WelcomeController extends Controller
{
    public function index()
    {
        session()->save();

        $sessionsCount = DB::table('sessions')->count();

        Mail::to('your@email.com')->send(new WelcomeMail($sessionsCount));

        return view('welcome', [
            'sessionsCount' => $sessionsCount
        ]);
    }
}
