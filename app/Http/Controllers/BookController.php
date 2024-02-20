<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookMakeRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $books = Book::all();

        return view("books.index", ["books" => $books]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view("books.create");

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookMakeRequest $request)
    {
        
        Book::create([

            "title" => $request["title"],
            "description" => $request["description"],
            "author" => $request["author"],
            "pages" => $request["pages"],
            "genre" => $request["genre"],
            "publishYear" => $request["publishYear"]


        ]);

        return redirect("books");

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {

        return view("books.single",["book" => $book]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        
        return view("books.edit", ["book" => $book]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookMakeRequest $request, Book $book)
    {
        
        $book->update([

            "title" => $request["title"],
            "description" => $request["description"],
            "author" => $request["author"],
            "pages" => $request["pages"],
            "genre" => $request["genre"],
            "publishYear" => $request["publishYear"]

        ]);

        return redirect("books");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        
        $book->destroy();

    }
}
