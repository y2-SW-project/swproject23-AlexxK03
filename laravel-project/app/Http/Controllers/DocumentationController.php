<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class DocumentationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $docs = Documentation::where('user_id', Auth::id())->get();
        // dd($docs);
        return view('documentations.index')->with('docs', $docs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('documentations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'docs'=>'file|image'
        ]);

        $docs = $request->file('docs');
        // $extention = $docs->getClientOriginalExtension();
        $filename = date('d-m-Y') . '_' . $request->input('doc_name');
        $path = $docs->storeAs('public/images',$filename);

        Documentation::create([
            'user_id'=>Auth::id(),
            'docs'=>$filename,
            'doc_name'=>$request->doc_name,
        ]);

        return to_route('documentations.index');
        }

    /**
     * Display the specified resource.
     */
    public function show(Documentation $documentation)
    {
        $user = Auth::user();
        // dd($documentation);

        // if ($doc->user_id != Auth::id()) {
        //     return abort(403);
        // }

        return view('documentations.show')->with('doc', $documentation);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
