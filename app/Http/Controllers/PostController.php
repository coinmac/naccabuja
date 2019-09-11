<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct (){
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('events',['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.create',['posts'=>$posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:3',
            'content' => 'required|min:10'
        ]);
       
        Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'category' => $request->category,
            'featured'=>$request->featured
        ]);

        return redirect(route('posts.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {   
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.show',['post'=>$post, 'posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.edit', compact('post'), ['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request,[
            'title' => 'required|min:3',
            'content' => 'required|min:10'
        ]);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->featured=$request->featured;
        session()->flash('message','The post:'.$request->title.' has been updated successfully!');
        $post->save();

        return redirect(route('posts.edit',['posts'=>$post]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('events'));
    }
}
