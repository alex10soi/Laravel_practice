<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function submit() {
    	return 'Okey';
    }

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
}
