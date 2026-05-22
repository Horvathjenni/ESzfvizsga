<?php

namespace App\Http\Controllers;

use App\Models\esemenyek;
use App\Http\Requests\StoreesemenyekRequest;
use App\Http\Requests\UpdateesemenyekRequest;
use App\Models\kategoriak;
use Illuminate\Http\Request;

class EsemenyekController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return esemenyek::with('catfuggveny')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreesemenyekRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(esemenyek $esemenyek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $task=esemenyek::findOrFail($id);
        $task->update ([
            
        'kategoria_id'=> $request -> kategoria_id,
        'esemeny_nev'=> $request  -> esemeny_nev,
        'leiras'=> $request  -> leiras,
        'datum'=>  $request ->  datum ?? now(),
        'ar'=>  $request  -> ar,
        'resztvevok'=>  $request  -> resztvevok,
        'kepUrl'=>  $request ->  kepUrl,


        ]); return $task;
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task=esemenyek::findOrFail($id);
        $task->delete();
        return response()->json()(['message'=> 'Deleted']);
    }
}
