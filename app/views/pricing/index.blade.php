
@extends('layouts.main')

<?php $section = "pricing"; ?>

@section('top-banner')
	<div>
		<img src="img/clouds-small.jpg" class="top-banner">
	</div>
@stop

@section('content')

<div class="bar pricing">
	<h2>Three Packages.
		<p>
			<small>
				Simple pricing for all your needs.
			</small>
		</p>
	</h2>
</div>

@include('pricing.partials.packagesTable')

@include('pricing.partials.packages')


@stop

