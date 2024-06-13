<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use App\Models\Books;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book', [
            'books' => Books::paginate(6)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Books::create($request->all());
        $book->save();
        return redirect()->route('books.index');

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
        $book = Books::findOrFail($id);
        return view('booksedit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Book $book
     * @return RedirectResponse
     */
    public function update(Request $request, Books $book): RedirectResponse
    {
        $book->fill($request->all());
        $book->save();
        return redirect()->route('books.index');     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $flight = Books::find($id);
    $flight->delete();
    return response()->json([
        'status' => 'success'
    ]);
}
}
