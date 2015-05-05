
<?php 

$jumbotronTable = jumbotronTable(); 

?>


@if($jumbotronTable != null)

<div id="jumbotron-container">

@foreach($jumbotronTable as $item)

<div class="jumbotron {{$item['class']}}">
	
<div class="media">
	<div class="media-top">
		<img class="media-object" 
		src="{{$item['img-src']}}" 
		alt="{{$item['img-alt']}}">
	</div>

	<div class="media-body">
		<h3 class="media-heading">{{$item['heading']}}</h3>
		<article>
			{{$item['content']}}
		</article>
	</div>

</div>	{{-- media  --}}
</div>	{{-- jumbotron  --}}

@endforeach

</div>

@endif