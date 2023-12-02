<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = book::orderBy('created_at', 'desc')->get();
        return view('book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookRequest $request)
    {
        book::create([
            'title' => $request->title,
            'author' => $request->author,
            'plot' => $request->plot,
            'cover' =>$request->file('cover')->store('public/cover'),
        ]);
        return redirect(route('home'))->with('message', 'libro inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view ('book.edit', compact('book') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'plot' => $request->plot,
            'cover' =>$request->file('cover') ? $request->file->store('public/cover'): $book->cover,
        ]);
        return redirect(route('book.show', $book))->with('message', 'You have successfully updated the book');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        
        $book->delete();
        return redirect(route('book.index'))->with('message' , 'You have successfully deleted the book');
    }
}
