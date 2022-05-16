<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

use Jenssegers\Mongodb\Eloquent\Model;

class BookController extends Controller
{
	public function index() {
		$books = Book::all();
		return $books;
	}
	public function details($pri_Key) {
		$posts =
			Book::find($pri_Key); // do not add ->first()
//			Book::where('id', $bookId)
//				->first();

		return $posts;
	}
	public function store(Request $request) {
		return Book::create($request->all());
	}
	public function update(Request $request, Book $book) {
		$book->update($request->all());

		return $book;
	}
	public function destroy($pri_Key) {
		$post = Book::find($pri_Key);
		$post->delete(); // Add confirmation

		return $post;
	}
}
