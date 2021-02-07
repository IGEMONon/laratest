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
    public function create($intParam, $arParams)
    {
        echo 'int: ' . $intParam . ', ar: ' . $arParams;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
