
@extends('layouts.main')

<?php $section = "portfolio"; ?>

@section('top-banner')
	<div>
		<img src="img/clouds-small.jpg" class="top-banner" id="top-banner">

	</div>
@stop

@section('content')

@include('portfolio.partials.sites')

@stop

