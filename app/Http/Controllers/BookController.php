<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $books = DB::table('books')->get();
        if($key = $request->'key'){
            $books =DB::table('books')->where('name','like','%'.$key.'%')->get();
    }
        return view('index')->with([
            'books'=>$books
        ]);

    }
}
