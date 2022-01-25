<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    public function create() {
        return view('Librarian.book_create');
    }

    public function view() {
        return view('Librarian.book_view');
    }
}
