<?php

namespace App\Http\Controllers;

use App\Models\kategoriak;
use App\Http\Requests\StorekategoriakRequest;
use App\Http\Requests\UpdatekategoriakRequest;

class KategoriakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorekategoriakRequest $request)
    {
        return kategoriak::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(kategoriak $kategoriak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekategoriakRequest $request, kategoriak $kategoriak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(kategoriak $kategoriak)
    {
        //
    }
}
