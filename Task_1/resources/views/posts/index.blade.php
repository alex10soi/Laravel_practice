@extends('layout')

@section('content')
<main role="main">
    <div class="container marketing">                    
        <div class="row">
        	@if($posts ?? '')
        		@foreach ($posts as $post)
		            <div class="col-lg-4">
		                <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
		                    <!-- <title>Placeholder</title> -->
		                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
		                </svg>
		                <h2>{{ $post->title }}</h2>
		                <p class="post_text">{{ $post->body }}</p>
		                <p class="send_post">
		                	<a class="btn btn-secondary" href="{{ route('showPosts', ['post'=>$post->id]) }}" role="button">View details &raquo;</a>
		                	<form class='delete' action="{{ route('deletePosts', ['post'=>$post->id]) }}" method="POST">
		                		{!! method_field('delete') !!}
                                {!! csrf_field() !!}
		                		<button type='submit' class="btn btn-danger">Delete &raquo;</button>
		                	</form>
		                	<form class='edit' action="{{ route('editPosts', ['post'=>$post->id]) }}" method="GET">		   
                                {!! csrf_field() !!}
		                		<button type='submit' class="btn btn-primary">Edit Post &raquo;</button>
		                	</form>
		                </p>
		            </div>
	            @endforeach
	        @endif
        </div><!-- /.row -->
    </div><!-- /.container -->
</main>
@endsection