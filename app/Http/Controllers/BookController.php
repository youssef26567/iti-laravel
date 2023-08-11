<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->paginate(12);
        $page = "Books";
        return view('books', [
            "page" => $page,
            "books" => $books
        ]);
    }
    // view page of create

    public function create()
    {
        $page = "create book";
        return view('form', ['page' => $page]);
    }
    // create
    public function store(Request $request)
    {
        Book::create([
            "title" => $request->title,
            "price" => $request->price,
            "description" => $request->description,
             "pic"=>"pic.png",
        ]);
        return redirect()->route('books.index');
    }

    public function show($book)
    {
        $book = Book::findOrFail($book);
        // dd($book);
         return view('card',["book"=>$book]);
         // task 
    }

    public function destroy($book)
    {
        $book = Book::find($book);
        $book->delete();
        return redirect()->back();
    }
    public function edit($book){
        $page = "Update book";
        $book=Book::find($book);
       return view('update',['page'=>$page,'book'=>$book]);
    }
    public function update(Request $request, $book)
    {
        $book = Book::find($book);
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->price = $request->input('price');
        
        $book->update();
        return redirect()->route('books.index');
    }
   
    
}
