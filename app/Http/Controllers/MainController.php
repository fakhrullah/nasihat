<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $title = 'Nasihat';
        $today = \Carbon::today();
        $quote = \App\Model\Quote::where('show_at', $today)->first();
        $background = \App\Model\Background::where('show_at', $today)->first();
        
        // failsafe
        if(!$quote) {
            $quote = \App\Model\Quote::where('show_at',  \Carbon::create(2015,8,12))->first();
        }
        
        return view('main', compact('title','quote','background'));
    }

}
