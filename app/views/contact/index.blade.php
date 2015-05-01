
@extends('layouts.main')

<?php $section = "contact"; ?>

@section('top-banner')
	<div>
		<img src="img/clouds-small.jpg" class="top-banner">
	</div>
@stop

@section('content')

<div id="contact-wrapper">

<div id="bio-title">
	<img id="bio-pic" src="img/bio.jpg" alt="Portrait of Cloud Edwards">
	<h3>Cloud Edwards - Web Developer</h3>
</div> <!-- bio-title -->

@include('contact.partials.info')

@include('contact.partials.social')

<div class="jumbotron bio"> 
	<h2>Have any questions? I'd love to hear from you. </h2>
	<h4>Send me an email, and I'll get back to you as quick as I can.</h4> 
</div>

@include('layouts.partials.errors')
@include('contact.partials.form')

</div>

@stop

