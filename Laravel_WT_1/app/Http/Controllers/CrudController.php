<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class CrudController extends Controller
{

    public function index() {
    	return view('/posts/index', []);
    }

    public function create() {
    	return view('/posts/create', []);
    }

    public function edit() {
    	return view('/posts/edit', []);
    }

    public function show() {
    	return view('/posts/show', []);
    }

	public function store(Request $request)	{
	    $post = new Post;
	    $post->title = $request->input('title');
	    $post->body = $request->input('body_text');

	    $post->save();     // созраняет данные модели в базу данных

    	return redirect()
    			->route('create_form')
    			->with('success', 'Сообщение было добавлено с помощью store() метода');
	}

	public function update(Request $request, $id) {
	    $posts = Post::find($id);
	    $posts->fill($request->all());
	}

}
