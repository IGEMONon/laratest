<?php

namespace App\Http\Controllers;

use App\Calc;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Calc $calc)
    {
        $calc->task_int = $request->input('intParam');
        $calc->task_array = serialize($request->input('arParams'));
        $calc->answer = $calc->getTaskAnswer($request);
        $calc->user_id = auth()->user()->id;
        $calc->save();
        $data = array('answer' => $calc->answer);
        // return ($calc->answer);
        return view('calc', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calc  $calc
     * @return \Illuminate\Http\Response
     */
    public function show(Calc $calc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calc  $calc
     * @return \Illuminate\Http\Response
     */
    public function edit(Calc $calc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calc  $calc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calc $calc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calc  $calc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calc $calc)
    {
        $calc->delete();
    }
}
