@extends('layout')

@section('content')
	<style type="text/css" media="screen">
		html,body {
			background: none; 
		}
	</style>
	<div class="wrapper">
		<form class="create-form" action="{{ route('storePost') }}" method="POST">
			@csrf
			<div class="field">
				<label for="title" class="label">Title</label>
				<div class="control">
					<input type="text" class="title" name="title" id="title">
				</div>
			</div>

			<div class="field">
				<label for="body" class="label">Body</label>
				<div class="control">
					<textarea class="body" name="body" id="body"></textarea>
				</div>
			</div>

			<div class="field">
				<div class="control">
					<button class="btn btn-primary" type="submit">Submit</button> 
				</div>
			</div>
		</form>
	</div>
@endsection