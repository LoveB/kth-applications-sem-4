<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PagesController extends Controller
{
    public function index(){
     
        $page = last(request()->segments());
        session(['page' => $page]);

        return view('pages.index');
    }
    public function pancakes(){
    
        $page = last(request()->segments());
        session(['page' => $page]);

        $posts =  Post::where('page', 'pancakes')->where('isDeleted', '0')->orderBy('created_at', 'DESC')->get();
        return view('pages.pancakes')->with('posts', $posts);
    }
    public function meatballs(){
        $page = last(request()->segments());
        session(['page' => $page]);

        $posts =  Post::where('page', 'meatballs')->where('isDeleted', '0')->orderBy('created_at', 'DESC')->get();
        return view('pages.meatballs')->with('posts', $posts);
    }
    public function calendar(){
        return view('pages.calendar');
    }

}
