<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class AjaxController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
 
    public function store(Request $request)
    {
        
    
       $this->validate($request, [
            'subject' => 'required|string|max:255|regex:/^[A-ZÅÄÖa-zåäö0-9_.,()!? ]+$/'
        ]);

        $name = auth()->user()->name;
        $prev = str_replace(url('/'), '', url()->previous());

        $post = new Post;
        $post->body = $request->subject;
        $post->isDeleted = 0;
        $post->page = $prev;
        $post->user_id = auth()->user()->id;
        $post->save(); 

        $id = $post->id;
        return response()->json($id);
      

/*         $prev = str_replace(url('/'), '', url()->previous());
 */
        //Create post
       /*  if(Auth::check()) {
            $post = new Post;
            $post->body = $request->subject;
            $post->isDeleted = 0;
            $post->page = $prev;
            $post->user_id = auth()->user()->id;
            $post->save();
            return response()->json(['success'=>'Data is successfully added']);
        } else {
           
            }    */ 
           
    }

    public function userDetails(Request $request)
    {
        $username = auth()->user()->name;
        
        return response()->json($username);
     
           
    }
  
}
