<?php

namespace App\Http\Controllers;

use Database\Seeders\Books;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }
    public function search(Request $request)
    {

        $searchterm = $request->input('query');

        $searchResults = (new Search())
            ->registerModel(Book::class, ['tile', 'ISBN','pub_year','valiable'])
            ->perform($searchterm);

        return view('search', compact('searchResults', 'searchterm'));
    }
}
