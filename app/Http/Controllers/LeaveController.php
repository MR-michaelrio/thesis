<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {
        $leaves = Leave::all();
        return view('leaves.index', compact('leaves'));
    }

    public function create()
    {
        return view('leaves.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'leave_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'allocation' => 'required|integer',
            'valid_date_from' => 'required|date',
            'valid_date_end' => 'required|date|after_or_equal:valid_date_from',
            'default_quota' => 'required|integer',
            'description' => 'nullable|string',
            'id_company' => 'required|integer|exists:company,id_company',
        ]);

        Leave::create($request->all());

        return redirect()->route('leaves.index')->with('success', 'Leave created successfully.');
    }

    public function show($id)
    {
        $leave = Leave::findOrFail($id);
        return view('leaves.show', compact('leave'));
    }

    public function edit($id)
    {
        $leave = Leave::findOrFail($id);
        return view('leaves.edit', compact('leave'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'leave_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'allocation' => 'required|integer',
            'valid_date_from' => 'required|date',
            'valid_date_end' => 'required|date|after_or_equal:valid_date_from',
            'default_quota' => 'required|integer',
            'description' => 'nullable|string',
            'id_company' => 'required|integer|exists:company,id_company',
        ]);

        $leave = Leave::findOrFail($id);
        $leave->update($request->all());

        return redirect()->route('leaves.index')->with('success', 'Leave updated successfully.');
    }

    public function destroy($id)
    {
        $leave = Leave::findOrFail($id);
        $leave->delete();

        return redirect()->route('leaves.index')->with('success', 'Leave deleted successfully.');
    }
}
