@extends('layouts.app')

@section('title-block')Редактирование записи@endsection

@section('content')
<h1>Редактирование записи</h1>

<form action="{{route('contact-update-submit', $data->id)}}" method="post">
	@csrf
	<div class="form-group">
		<label for="name">Ваше имя:</label>
		<input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Введите Ваше имя" id="name">
		<label for="email">Ваш email:</label>
		<input type="text" name="email" class="form-control" value="{{$data->email}}" placeholder="Введите email" id="email">
		<label for="subject">Тема сообщения:</label>
		<input type="text" name="subject" class="form-control" value="{{$data->subject}}" placeholder="Введите тему" id="subject">
		<label for="message">Ваше сообщение:</label>
		<textarea type="text" name="message" class="form-control" placeholder="Введите сообщение" id="massage">{{$data->message}}</textarea>
		<button type="submit" class="btn btn-primary mt-3">Редактировать</button>
		
	</div>
	
</form>
@endsection
