<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = "Add New Quote";
        $titleSmall = "From Al-Quran Or Hadith (sahih only)";
        $lastQuoteShowTime = \App\Model\Quote::orderBy('show_at', 'desc')->first(['show_at']);
        $willBeShowAt = \Carbon::createFromFormat('Y-m-d', $lastQuoteShowTime->show_at)->addDay()->format('Y-m-d');
        return view('quote.create', compact('title', 'titleSmall', 'willBeShowAt'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\QuoteRequest $request)
    {
        //
        \App\Model\Quote::create($request->all());
        return redirect(route('quote.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $dmY
     * @return Response
     */
    public function show($dmY)
    {
        $title = 'Nasihat '.$dmY;
        $background = \URL::asset('images/'.$dmY.'.jpg');
        $showAt = \Carbon::createFromFormat('dmY', $dmY)->format('Y-m-d');
        $quote = \App\Model\Quote::where('show_at', '=', $showAt)->first();
        
        return view('main', compact('title', 'quote', 'background', 'willBeShowAt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $dmY
     * @return Response
     */
    public function edit($dmY)
    {
        $title = "Edit Quote";
        $showAt = \Carbon::createFromFormat('dmY',$dmY)->format('Y-m-d');
        $quote = \App\Model\Quote::where('show_at', '=', $showAt)->first();
        return view('quote.edit', compact('title', 'titleSmall', 'quote', 'dmY'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $dmY
     * @return Response
     */
    public function update(Requests\QuoteRequest $request, $dmY)
    {
        $showAt = \Carbon::createFromFormat('dmY',$dmY)->format('Y-m-d');
        $quote = \App\Model\Quote::where('show_at', '=', $showAt)->first();
        
        $quote->update($request->updateAllExceptShowAt());
        
        return redirect(route('quote.edit',$dmY));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
