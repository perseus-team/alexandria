<?php

namespace App\Http\Controllers;

use App\PhysicalCopy;
use Illuminate\Http\Request;

class PhysicalCopyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PhysicalCopy::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "book_id" => "required",
            "location" => "",
            "notes" => ""
        ]);

        $physicalCopy = new PhysicalCopy($data);

        $physicalCopy->user_id = $request->user()->id;

        $physicalCopy->save();

        return $physicalCopy;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PhysicalCopy  $physicalCopy
     * @return \Illuminate\Http\Response
     */
    public function show(PhysicalCopy $physicalCopy)
    {
        return $physicalCopy;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PhysicalCopy  $physicalCopy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhysicalCopy $physicalCopy)
    {
        $data = $request->validate([
            "book_id" => "",
            "location" => "",
            "notes" => ""
        ]);

        $physicalCopy->update($data);

        return $physicalCopy;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PhysicalCopy  $physicalCopy
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhysicalCopy $physicalCopy)
    {
        $physicalCopy->delete();
        return true;
    }
}
