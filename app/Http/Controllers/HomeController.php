<?php

namespace App\Http\Controllers;


use App\Models\Ebook;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //        dd($book);
        $allEbook = Ebook::all();

        return view('home', [
            'allEbook' => $allEbook
        ]);
    }
    public function detail(Ebook $ebook)
    {
        return view('book_details',[
           'ebook' => $ebook
        ]);
    }
}
