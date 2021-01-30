@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')
<h1>Страница контактов</h1>

<form action="{{route('contact-form') }}" method="post">
	@csrf
	<div class="form-group">
		<label for="name">Ваше имя:</label>
		<input type="text" name="name" class="form-control" placeholder="Введите Ваше имя" id="name">
		<label for="email">Ваш email:</label>
		<input type="text" name="email" class="form-control" placeholder="Введите email" id="email">
		<label for="subject">Тема сообщения:</label>
		<input type="text" name="subject" class="form-control" placeholder="Введите тему" id="subject">
		<label for="message">Ваше сообщение:</label>
		<textarea type="text" name="message" class="form-control" placeholder="Введите сообщение" id="massage"></textarea>
		<button type="submit" class="btn btn-success mt-3">Отправить</button>
	</div>
	
</form>
@endsection
