@extends('layout')

@section('content_form')
	<form action="{{route('create_form')}}" method="post" >
		@csrf
		<div class="form-group">
			<label for="title" >Введите title</label>
			<input type="text" name="title" placeholder="Введите title" id="title" class='form-control'>
		</div>
		<div class="form-group">
			<label for="body_text">Введите сообщение</label>
			<textarea name="body_text" id="body_text" class='form-control' placeholder="Введите сообщение"></textarea>
		</div>
		<button type="submit" class='btn btn-success'>Отправить</button>
	</form>
@endsection