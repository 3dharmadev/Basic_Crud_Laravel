<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchesController extends Controller
{
    // Listing Batches
    public function index()
    {
        $batches = Batch::all();
        return view('batches.index', compact('batches'));
    }

    // Creating Batches
    public function create()
    {
        return view('batches.create');
    }

    public function store(Request $request)
    {
        // Validate and store batch data
    }

    // Showing Batches
    public function show(Batch $batch)
    {
        return view('batches.show', compact('batch'));
    }

    // Editing Batches
    public function edit(Batch $batch)
    {
        return view('batches.edit', compact('batch'));
    }

    public function update(Request $request, Batch $batch)
    {
        // Validate and update batch data
    }

    // Deleting Batches
    public function destroy(Batch $batch)
    {
        $batch->delete();
        return redirect()->route('batches.index')->with('success', 'Batch deleted successfully');
    }
}

