<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.crlv.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function verde()
    {
        return view('admin.pages.crlv.verde');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function dut()
    {
        return view('admin.pages.dut.index');
    }

    /**
     * Display the specified resource.
     */
    public function atpve()
    {
        return view('admin.pages.atpve.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vio $vio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vio $vio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vio $vio)
    {
        //
    }
}
