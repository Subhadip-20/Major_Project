<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin; // Make sure to import the Admin model
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function login(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'adm_id' => 'required',
            'password' => 'required',
        ]);

        // Retrieve the admin record from the database based on the provided admin ID
        $admin = Admin::where('adm_id', $validatedData['adm_id'])->first();

        // Check if an admin record was found
        if ($admin) {
            // Verify the password
            if ($validatedData['password'] === $admin->adm_password) {
                // Authentication passed, redirect to the home page
                // return view('homepage');
                return view('homepage');
            } else {
                // Invalid password, redirect back with an error message
                return redirect()->back()->with('error', 'Invalid password.');
            }
        } else {
            // Admin ID not found, redirect back with an error message
            return redirect()->back()->with('error', 'Admin ID not found.');
        }
    }

    
    public function logout(Request $request)
    {
        Auth::logout();
        return view('landing_operator');
    }

}
