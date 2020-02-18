<?php

namespace App\Http\Controllers;

use App\FastEvent;

class FullcalendarController extends Controller
{

    public function index()

    {

        $fastEvents = FastEvent::all();

        return view('fullcalendar.master', compact('fastEvents'));
    }


}
