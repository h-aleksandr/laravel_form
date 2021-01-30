@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
<h1>Все сообщения</h1>

@foreach($data as $elem)
	<div class="alert alert-info">
		<h3>{{ $elem->subject }}</h3>
		<p>{{ $elem->name }}</p>
		<p><small>{{ $elem->created_at }}</small></p>
		<a href="{{ route('contact-data-one', $elem->id) }}"><button class="btn btn-warning">Детaльнее</button></a>
	</div>
@endforeach

@endsection
