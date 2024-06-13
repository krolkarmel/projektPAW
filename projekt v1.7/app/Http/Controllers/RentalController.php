<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalController extends Controller
{
    public function index()
    {
        $rentals = Rental::where('user_id', Auth::id())->get();
        return view('user', compact('rentals'));
    }

    public function create()
    {
        $books = Books::where('status', 'available')->get();
        return view('rentals.create', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'book_id' => 'required|exists:book,id', // Zmieniono na 'book'
        ]);

        $rental = new Rental();
        $rental->user_id = Auth::id();
        $rental->book_id = $request->book_id;
        $rental->status = 'in progress';
        $rental->save();

        $book = Books::find($request->book_id);
        $book->status = 'borrowed';
        $book->save();

        return redirect()->route('rentals.index')->with('success', 'Book borrowed successfully.');
    }

    public function updateStatus(Request $request, Rental $rental)
    {
        $request->validate([
            'status' => 'required|in:in progress,borrowed,returned',
        ]);

        $rental->status = $request->status;
        $rental->save();

        if ($request->status == 'returned') {
            $book = $rental->book;
            $book->status = 'available';
            $book->save();
        }

        return redirect()->back()->with('success', 'Rental status updated successfully.');
    }

    public function dashboard()
    {
        $rentals = Rental::where('user_id', Auth::id())->get();
        $books = Books::all();
        return view('user', compact('rentals', 'books'));
    }

    public function workerDashboard()
    {
        $rentals = Rental::all(); // Retrieve all rentals for the worker
        return view('worker', compact('rentals'));
    }
}
