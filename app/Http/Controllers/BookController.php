<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderBy('name')->get();
        return view('backend.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'backend.book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book =  Book::create($request->all());
//        dd($book);
        return view('backend.success.success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $bookId)
    {
        $book = Book::find($bookId);
//        dd($book);
        return view('backend.book.show', compact('book'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $bookId)
    {
        $book = Book::find($bookId);
        return view('backend.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $bookId)
    {
        $book = Book::find($bookId);
        $book->update($request->all());
        return redirect()->route('backend.book.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $bookId)
    {
        $book =Book::find($bookId);
        $book->delete();
        return redirect()->route('backend.book.index');
    }
}
