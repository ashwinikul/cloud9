
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

	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapse{{$item['number']}}" aria-expanded="false" aria-controls="collapse{{$item['number']}}">

  	{{--   Collapsible Group Item --}}
		<div class="media-body">
			<h3 class="media-heading">{{$item['heading']}}</h3>
		</div>

</button>
<div class="collapse" id="collapse{{$item['number']}}">
  <div class="well">

    {{-- Panel Body --}}
  	<div class="media-body">

		<article>
			{{$item['content']}}
		</article>
	</div>

  </div>
</div>

	</div>	{{-- media  --}}
</div>	{{-- jumbotron  --}}

@endforeach

</div>

@endif