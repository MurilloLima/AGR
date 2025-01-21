<?php

namespace App\Http\Controllers;

use App\Models\Admin\Sistema;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.sistemas.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.sistemas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function desenvolvimento()
    {
        return view('admin.pages.sistemas.desenvolvimento');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sistema $sistema)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sistema $sistema)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sistema $sistema)
    {
        //
    }
}
