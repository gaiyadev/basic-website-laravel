<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post; //including my model

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $post = Post::orderBy('created_at', 'asc')->get();
        return view('dashboard.view')->with('posts', $post);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $post = Post::orderBy('created_at', 'desc')->get();
        return view('dashboard/post');
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
            'title' => 'required|min:4|max:50 ',
            'body' => 'required |max:50',
            'category' => 'required',            
        ]);
       //insert messages
       $post = new Post;
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->category = $request->input('category');
       //$message->message = $request->input('message');
       $post->save();
       return redirect('/post')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $post = Post::find($id);
        // return view('dashboard/view')->with('post', $post);
       
    } 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('dashboard/blank')->with('post', $post);
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
        $this->validate($request, [
            'title' => 'required|min:4|max:50 ',
            'body' => 'required |max:50',
            'category' => 'required',            
        ]);
       //insert messages
       $post =  Post::find($id);
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->category = $request->input('category');
       //$message->message = $request->input('message');
       $post->save();
       return redirect('/blank')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::find($id);
         $post->delete();
         return redirect('/view')->with('success', 'Post removed succesfully');
    }
}
