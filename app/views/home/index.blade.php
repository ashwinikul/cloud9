
@extends('layouts.main')

<?php $section = "home"; ?>

@section('top-banner')
	<div>
		<img src="img/clouds-small.jpg" class="top-banner" id="top-banner">

	</div>
@stop

@section('content')

@include('home.partials.jumbotronTable')

@include('home.partials.jumbotron')


@stop

