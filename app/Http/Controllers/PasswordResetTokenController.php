<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PasswordResetTokenController extends Controller
{
    // Display a listing of the password reset tokens.
    public function index()
    {
        $tokens = DB::table('password_reset_tokens')->get();
        return view('password_reset_tokens.index', compact('tokens'));
    }

    // Show the form for creating a new password reset token.
    public function create()
    {
        return view('password_reset_tokens.create');
    }

    // Store a newly created password reset token in storage.
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required',
        ]);

        DB::table('password_reset_tokens')->insert([
            'email' => $request->input('email'),
            'token' => $request->input('token'),
            'created_at' => now(),
        ]);

        return redirect()->route('password_reset_tokens.index')->with('success', 'Token created successfully.');
    }

    // Display the specified password reset token.
    public function show($email)
    {
        $token = DB::table('password_reset_tokens')->where('email', $email)->first();
        return view('password_reset_tokens.show', compact('token'));
    }

    // Remove the specified password reset token from storage.
    public function destroy($email)
    {
        DB::table('password_reset_tokens')->where('email', $email)->delete();

        return redirect()->route('password_reset_tokens.index')->with('success', 'Token deleted successfully.');
    }
}
