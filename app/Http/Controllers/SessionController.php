<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    // Display a listing of the sessions.
    public function index()
    {
        $sessions = DB::table('sessions')->get();
        return view('sessions.index', compact('sessions'));
    }

    // Show the form for creating a new session.
    public function create()
    {
        return view('sessions.create');
    }

    // Store a newly created session in storage.
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'user_id' => 'nullable|exists:users,id',
            'ip_address' => 'nullable|string|max:45',
            'user_agent' => 'nullable|string',
            'payload' => 'required',
            'last_activity' => 'required|integer',
        ]);

        DB::table('sessions')->insert([
            'id' => $request->input('id'),
            'user_id' => $request->input('user_id'),
            'ip_address' => $request->input('ip_address'),
            'user_agent' => $request->input('user_agent'),
            'payload' => $request->input('payload'),
            'last_activity' => $request->input('last_activity'),
        ]);

        return redirect()->route('sessions.index')->with('success', 'Session created successfully.');
    }

    // Display the specified session.
    public function show($id)
    {
        $session = DB::table('sessions')->where('id', $id)->first();
        return view('sessions.show', compact('session'));
    }

    // Remove the specified session from storage.
    public function destroy($id)
    {
        DB::table('sessions')->where('id', $id)->delete();

        return redirect()->route('sessions.index')->with('success', 'Session deleted successfully.');
    }
}
