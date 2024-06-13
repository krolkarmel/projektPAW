<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('editaccount', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'date' => 'required|date',
        ]);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->date = $request->date;


        $user->save();

        return redirect()->route('account.edit')->with('success', 'Dane zostały zaktualizowane.');
    }
}
