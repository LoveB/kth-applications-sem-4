<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PagesController extends Controller
{
    public function index(){

        return view('pages.index');
    }
    public function pancakes(){

        $posts =  Post::where('page', '/pancakes')->where('isDeleted', '0')->orderBy('created_at', 'DESC')->get();
        return view('pages.pancakes')->with('posts', $posts);
    }
    public function meatballs(){

        $posts =  Post::where('page', '/meatballs')->where('isDeleted', '0')->orderBy('created_at', 'DESC')->get();
        return view('pages.meatballs')->with('posts', $posts);
    }
    public function calendar(){
        return view('pages.calendar');
    }

}
