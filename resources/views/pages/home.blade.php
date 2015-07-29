@extends('master')

@section('content')
	<h1><?= $name; ?></h1>
	@foreach ($lessonsArr as $lession )
		<h2>{{$lession}} </h2>
	@endforeach
@stop

