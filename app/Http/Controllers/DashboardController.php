<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooks = Book::count();
        $totalAuthors = Author::count();
        return view('dashboard', compact('totalBooks', 'totalAuthors'));
    }
}

