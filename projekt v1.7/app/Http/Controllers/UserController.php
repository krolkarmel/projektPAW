<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Flight;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('editrole', [
            'users' => User::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::findOrFail($id);
    return view('editusers', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  User $book
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->roles()->sync([$request->input('roles')]);
        return redirect()->back()->with('success', 'User role updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $flight = User::find($id);
        $flight->delete();
        return response()->json([
            'status' => 'success'
        ]);
    }

    public function updateRole(Request $request, $id)
    {
        $user = User::find($id);
        $user->role = $request->input('role');
        $user->save();

        return redirect()->back()->with('success', 'User role updated successfully');
    }
}
