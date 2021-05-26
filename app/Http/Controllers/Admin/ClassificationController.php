<?php

namespace App\Http\Controllers\Admin;

use App\Models\Classification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use voku\helper\ASCII;

class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classifications = Classification::all();
        return view('admin.classifications.index', compact('classifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.classifications.getcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|unique:classifications|alpha_dash|max:20',
            'description' => 'required|max:30',
        ]);

        Classification::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('AdminClassifications')->with('success', 'Classification has been added!');
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
        $classification = Classification::findOrFail($id);
        return view('admin.Classifications.edit', compact('classification'));
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
        $this->validate($request, [
            'title' => 'required|alpha_dash|max:20',
            'description' => 'required|max:30',
        ]);

        $classification = Classification::findOrFail($id);
        $classification->update($request->all());
        return redirect()->route('AdminClassifications')->with('success', 'Classification has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classification = Classification::findOrFail($id);
        $classification->delete();
        return redirect()->route('AdminClassifications')->with('success', 'Classification has been deleted!');
    }
}
