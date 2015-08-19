<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $title = 'Upload image';
        
        return view('background.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Requests\BackgroundRequest $request)
    {
        $backgroundName = str_random();
        $backgroundDestionation = public_path().'/uploads/backgrounds/';
        
        // add file to storage
        $fileExt = $request->file('background')->getClientOriginalExtension();
        $request->file('background')->move( $backgroundDestionation, $backgroundName.'.'.$fileExt);
        
        // add to db only if background added to storage
        if(\File::exists($backgroundDestionation)){
            $background = new \App\Model\Background();
            $background->src = $backgroundName.'.'.$fileExt;
            $background->save();
        }
        
        return redirect(route('background.create'))->with('status','gambar berjaya dimuatnaik');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
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
