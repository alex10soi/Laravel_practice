@extends('layout')

@section('newStyle')
	<style type="text/css" media="screen">
		.label {
			color: white; 
		}
	</style>
@endsection

@section('content')
	<div class="wrapper">
		<h1 class="text-white">Create Post</h1>
		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
<!-- Create Post Form -->
		<form class="create-form" action="{{ route('storePost') }}" method="POST">
			@csrf
			<div class="field">
				<label for="title" class="label">Title</label>
				<div class="control">
					<input type="text" class="title" name="title" id="title" value="{{ old('title') }}">
					{{-- Errors this input start --}}
					{{-- @error('title')
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror --}}
					{{-- Errors this input end --}}
				</div>
			</div>

			<div class="field">
				<label for="body" class="label">Body</label>
				<div class="control">
					<textarea class="body" name="body" id="body">{{ old('body') }}</textarea>
					{{-- Errors this input start --}}
					{{-- @error('body') 
					    <div class="alert alert-danger">{{ $message }}</div>
					@enderror --}}
					{{-- Errors this input end --}}
				</div>
			</div>

			<div class="field">
				<div class="control">
					<button class="btn btn-primary" type="submit">Submit</button> 
				</div>
			</div>
		</form>
		@if($message ?? '')
		   <div class="send-message <?php echo $message === 1 ? 'active' : ''; ?>">Сообщение отправлено</div>
		@endif
	</div>
@endsection