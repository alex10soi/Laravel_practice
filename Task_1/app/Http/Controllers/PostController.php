<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $postId = self::getLastPostId();
        return view('posts.create', compact('postId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        print_r($request->server());
       $request->validated();
       $post = new Post;
       $post->fill($request->all());
       $post->save();
       $message = 1;
       $postId = self::getLastPostId();
       return view('posts.create', compact('message', 'postId'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $posts->fill($request->all());
        $posts->save();
        $postId = self::getLastPostId();
        $posts = Post::all();
        return redirect()->route('postsList')->with(compact('postId', 'posts'));           
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        $posts = [];
        return self::index();             
    }

    public function getLastPostId() 
    {
        $post = Post::all();
        if(count($post) > 0) {
            $postId = $post[count($post) - 1]->id;
        } else {
            $postId = 0;
        }
        return $postId;
    }

    public function startHomepage() {
        $postId = $this->getLastPostId();
        return view('layouts.app', compact('postId'));
    }
}
