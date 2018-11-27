<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Session;
use App\Http\Requests\PostStoreRequest;


class PostsController extends Controller
{
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
        $this->validate($request, [
            'subject' => 'required|string|max:255|regex:/^[A-ZÅÄÖa-zåäö0-9_.,()!? ]+$/'
        ]);

        $current_page = session('page');

        //Create post
        if(Auth::check()) {
            $post = new Post;
            $post->body = $request->input('subject');
            $post->isDeleted = 0;
            $post->page = $current_page;
            $post->user_id = auth()->user()->id;
            $post->save();
            return redirect('/' . $current_page );
        } else {
            return redirect('/' . $current_page )->with('message', 'unauthorized');
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
    public function delete($id)
    {
        $current_page = session('page');

        $post = Post::find($id);
        $post->isDeleted = 1;
        $post->save();

        return redirect('/' . $current_page );
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
