<?php

namespace App\Http\Controllers;

use App\Models\Classification;
use Illuminate\Http\Request;

class ClassificationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $classifications = Classification::all();
        return view('user.classifications.index', compact('classifications'));
    }
}
