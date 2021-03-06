<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supplier/status/index');
    }

    public function detailProses(){
        return view('supplier/status/detailProses');
    }

    public function detailAcc(){
        return view('supplier/status/detailAcc');
    }

    public function detailTolak(){
        return view('supplier/status/detailTolak');
    }

    public function detailValidasi(){
        return view('supplier/status/detailValidasi');
    }

    public function detailSelesai(){
        return view('supplier/status/detailSelesai');
    }

    public function detailSubmit(){
        return view('supplier/status/detailSubmit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
