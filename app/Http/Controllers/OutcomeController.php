<?php

namespace App\Http\Controllers;

use App\Models\Outcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $outcomeData = (Outcome::all())->toArray();

        $heading = array_keys($outcomeData[0]);
        $data = array_values($outcomeData);

        //Aquí la lógica de negocio para el index
        return view('outcome.index',['title' => 'My outcomes', 'heading' => $heading, 'tableData' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return '<p>Esta es la página del create de outcomes</p>';
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
    public function show(string $id)
    {
        //
        return '<p>Esta es la página del show de outcomes</p>';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return '<p>Esta es la página del edit de outcomes</p>';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
