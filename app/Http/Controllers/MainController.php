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
        $quote = \App\Model\Quote::where('show_at', '=', $today)->first();
        $background = \URL::asset('images/'.$today->format('dmY') . '.jpg');
        
        // failsafe
        if(!$quote) {
            $quote = \App\Model\Quote::where('show_at', '=', '2015-08-12')->first();
            $background = \URL::asset('images/12082015.jpg');
        }        
        
        return view('main', compact('title','quote','background'));
    }

}
