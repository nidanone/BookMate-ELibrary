<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\rruser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SheetController extends Controller
{
    public function index(){
        return view('sheet', [
            "title" => "Disimpan",
            "userbook" => User::with('book')->select('users.*', 'books.slug as book_slug', 'books.penulis as book_penulis', 'books.judul as book_judul', 'books.ISBN as book_isbn', 'books.cover as book_cover', 'books.id as book_id')
                                        ->join('books', 'users.id', '=', 'books.user_id')
                                        ->groupBy('books.id')
                                        ->where('users.username', Auth::user()->username)
                                        ->latest()
                                        ->get(),
            "userreview" => rruser::with(['book', 'user'])->select('users.username', 'rrusers.*','books.slug as book_slug', 'books.penulis as book_penulis', 'books.judul as book_judul', 'books.ISBN as book_isbn', 'books.cover as book_cover', 'books.id as book_id')
                                    ->join('books', 'rrusers.book_id', '=', 'books.id')
                                    ->join('users', 'users.id', '=', 'rrusers.user_id')
                                    ->groupBy('rrusers.id')
                                    ->where('users.username', Auth::user()->username)
                                    ->get(),
        ]);
    }
}
