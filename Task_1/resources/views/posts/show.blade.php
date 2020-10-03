@extends('layout')

@section('newStyle')
	<style type="text/css" media="screen">
		.container {
			padding: 15px; 
		}
	</style>
@endsection

@section('content')
<main role="main">
    <div class="container marketing">                    
        <div class="row">
        	@if($post)
	            <div class="container post_wide">
	                <svg class="bd-placeholder-img rounded-circle" width="100" height="100" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
	                    <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
	                </svg>
	                <h2>{{ $post->title }}</h2>
	                <p class="post_text">{{ $post->body }}</p>	              
	            </div>
	        @endif
        </div><!-- /.row -->
    </div><!-- /.container -->
</main>
@endsection