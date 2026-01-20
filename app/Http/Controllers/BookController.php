<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Contact;
use App\Models\Event;
use App\Models\User;
use App\Models\Featured;

class BookController extends Controller
{
    //
    public function browse() {
        $books = [];
        return view('browse', ['books' => $books]);
    }

    public function employee() {
        // get books
        $books = Book::all();

        // get contact submissions
        $contacts = Contact::all();

        // get Events
        $events = Event::all();

        // get Featured Titles
        $featureds = Featured::all();

        // get Employees
        $employees = User::all();

        return view('login.employee', ['books' => $books, 'contacts' => $contacts, 'events' => $events, 'featureds' => $featureds, 'employees' => $employees]);
    }

    public function createBook(Request $request) {
        $validated = $request->validate([
            'title' => 'required|string|min:3',
            'author' => 'required|string|min:1|max:35',
            'publishYear' => 'required|integer|max:2025',
            'price' => 'required|numeric|min:0|max:999.99',
            'genre' => 'required|string',
            'stock' => 'required|integer|min:0',
            'image' => ['required', 'string', 'regex:/\.(png|jpeg)$/i'],
            'imageAlt' => 'required|string|min:10|max:250'
        ]);
        $validated['price'] = (float) number_format($validated['price'], 2, '.', '');

        Book::create($validated);

        return redirect()->route('login.employee');
    }

    public function search(Request $request) {
        $category = $request->input('category');
        $term = $request->input('term');

        if($category == 'all') {
            $books = Book::orderBy('title')->get();
        }
        else if($category == 'maxPrice' && is_numeric($term)) {
            $books = Book::where('price', '<=', (float) $term)->orderBy('title')->get();
        }
        else {
            $books = Book::where($category, 'like', '%' . $term . '%')->orderBy('title')->get();
        }

        return view('browse', ['books' => $books]);
    }

    public function bookUpdate(Request $request) {
        $validated = $request->validate([
            'id' => 'required|exists:books,id',
            'price' => 'required|numeric|min:0|max:999.99',
            'stock' => 'required|integer|min:0',
            'image' => ['required', 'string', 'regex:/\.(png|jpeg)$/i'],
            'imageAlt' => 'required|string|min:10|max:250',
            'deleteThis' => 'boolean'
        ]);

        $book = Book::findOrFail($validated['id']);

        if($request->boolean('deleteThis')) {
            $book->delete();
            return redirect()->route('login.employee');
        }


        if(isset($validated['price'])) {
            $book->price = (float) number_format($validated['price'], 2, '.', '');
        }
        if(isset($validated['stock'])) {
            $book->stock = $validated['stock'];
        }
        if(isset($validated['image'])) {
            $book->image = $validated['image'];
        }
        if(isset($validated['imageAlt'])) {
            $book->imageAlt = $validated['imageAlt'];
        }

        $book->save();
        return redirect()->route('login.employee');
    }
}
