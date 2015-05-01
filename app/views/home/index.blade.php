
@extends('layouts.main')

<?php $section = "home"; ?>

@section('top-banner')
	<div>
		<img src="img/clouds.jpg" class="top-banner" id="top-banner">
	</div>
@stop

@section('content')


<div class="jumbotron A">

	<div class="media">
		<img class="media-object" 
			src="img/icons/page.png" 
			alt="icon of a web page">
	</div>
	<h3>Custom Web Development</h3>
	<article>
		A custom built modern website is incredibly flexible and powerful. Unleash the technology to create solutions.
	</article>
</div>

<div class="jumbotron A1">

	<div class="media">
		<img class="media-object" 
			src="img/icons/smartphone-round.png"
			alt="icon of a smart phone">
	</div>
	<h3>Responsive Design</h3>
	<article>
		Works with smart phones and tablets, adjusts automatically to respond to visitors various devices.
	</article>
</div>

<div class="jumbotron B">
	<div class="media">
		<img class="media-object" 
			src="img/icons/pencil.png" 
			alt="icon of a pencil">
	</div>
	<h3>Web Artisan</h3>
	<article>
		Tailor made for your needs, and able to grow with your business. 
	</article>
	<article>
		Websites built with the Laravel framework are easy to maintain, scalable, and elegant. 
	</article>
</div>

<div class="jumbotron C">
	<div class="media">
		<img class="media-object" 
			src="img/icons/robot.png" 
			alt="icon of a robotic arm">
	</div>
	<h3>Automate Business Tasks</h3>
	<article>
		Day to day business tasks can be automated and expedited with web technology, saving money and time.
	</article>
</div>

<div class="jumbotron D">
	<div class="media">
		<img class="media-object" 
			src="img/icons/payment.png" 
			alt="icon representing a payment">
	</div>
	<h3>Easy Payments</h3>
	<article>
		Take payments easily and safely using Stripe, and PayPal.
	</article>
	<article>
		Safely save customer data with an encrypted token, and automatically bill clients on a monthly basis.
	</article>
</div>

<div class="jumbotron E">
	<div class="media">
		<img class="media-object" 
			src="img/icons/shield.png" 
			alt="icon of a shield">
	</div>
	<h3>Secure Servers</h3>
	<article>
		No sensitive customer information ever touches our servers hard drives. 
	</article>
	<article>
		This means no hacker can steal customer data from our servers, because there isn't anything to steal.
	</article>
</div>

<div class="jumbotron F">
	<div class="media">
		<img class="media-object" 
			src="img/icons/dollar.png" 
			alt="icon of a dollar sign">
	</div>
	<h3>Getting Paid</h3>
	<article>
		Set up automatic deposits strait to your bank account and a daily, weekly, or monthly basis.
	</article>
	<article>
		Get passive income rolling into your bank account, with a custom built website.
	</article>
</div>

@stop

