<?php

namespace App\Http\Controllers;

use App\FastEvent;
use Illuminate\Http\Request;

class FastEventController extends Controller
{

    public function destroy(Request $request)
    {
        FastEvent::where('id', $request->id)->delete();

        return response()->json(true);
    }

}
