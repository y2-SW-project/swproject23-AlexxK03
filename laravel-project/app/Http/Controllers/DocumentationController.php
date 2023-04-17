<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\Booking;
use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DocumentationController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $docs = Documentation::all();
        dd($docs);

        return view('documentation.index')->with('docs', $docs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Documentation $Documentation)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documentation $documentation)
    {


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documentation $documentation)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documentation $documentation)
    {

    }
}
