<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
      
      return Book::all(); //Read
    }
    public function show($id){
      return Book::find($id); //Individual book
    }
  
    public function create(Request $request){
      $book = new Book();
      $book->title = 'Scary stories to tell around the campfire';
      $book->isbn = '';
      $book->pages = 100;
      $book->cost = 10.0;
      $book->current_condition = 0;
      
      $book->save(); //Create
      
    }
    public function update($id){
      $book = Book::find($id)
      $book->cost = 20.0;
      
      $book->save(); //Update
    }
  public function destory($id){
    $book = Book::find($id)->delete(); //delete
  }
}
