@extends('layouts.app')

@section('title-block'){{$data->subject}}@endsection

@section('content')
<h1>{{$data->subject}}</h1>

	<div class="alert alert-info">
		<p>{{$data->name}} - {{$data->email}}</p>
		<p>{{$data->message}}</p>
		<p><small>{{$data->created_at}}</small></p>
		<a href="{{route('contact-update', $data->id)}}"><button type="submit" class="btn btn-primary mt-3">Редактировать запись</button></a>
		<a href="{{route('contact-delete', $data->id)}}"><button type="submit" class="btn btn-danger mt-3">Удалить запись</button></a>
	</div>

@endsection
