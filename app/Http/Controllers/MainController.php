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
        
        $background = $today->format('dmY') . '.jpg';
        
        return view('main', compact('title','quote','background'));
    }

}
