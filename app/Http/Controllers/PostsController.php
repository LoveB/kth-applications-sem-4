<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Session;
use App\Http\Requests\PostStoreRequest;
use App\Events\NewComment;



class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response

     */
    public function store(Request $request)
    {
    
        if ($request->subject){

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

            return response()->json(['success' => $id . ' is stored']);

       }
           else { return response()->json(['error' => 'comment is empty']);
           }
    
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Mark the specified resource as deleted.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        try {
            $postId = $request->id;
            $post = Post::find($postId);
            $post->isDeleted = 1;
            $post->save();
            return response()->json(['success'=>'Data is successfully deleted']);
        } catch(Exception $e){
            report($e);
            return response()->json(['error'=>'Data is not deleted']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
