
@extends('layouts.main')

<?php $section = "contact"; ?>

@section('top-banner')
	<div>
		<img src="img/clouds-small.jpg" class="top-banner">
	</div>
@stop

@section('content')

<div id="bio-title">
	<img id="bio-pic" src="img/bio.jpg" alt="Portrait of Cloud Edwards">
	<h3>Cloud Edwards - Web Developer</h3>
</div> <!-- bio-title -->

@include('contact.partials.info')

@include('contact.partials.social')

@include('contact.partials.form')

@stop

