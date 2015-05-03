
<?php 

$jumbotronTable = jumbotronTable(); 

?>


@if($jumbotronTable != null)

@foreach($jumbotronTable as $item)

<div class="jumbotron {{$item['class']}}">
	<div class="media">


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading{{$item['number']}}">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$item['number']}}" aria-expanded="false" aria-controls="collapse{{$item['number']}}" class="collapsed">


        {{--   Collapsible Group Item --}}
        <div class="media-left">
			<img class="media-object" 
			src="{{$item['img-src']}}" 
			alt="{{$item['img-alt']}}">
		</div>

	    <div class="media-body">
			<h3 class="media-heading">{{$item['heading']}}</h3>
		</div>


        </a>
      </h4>
    </div>
    <div id="collapse{{$item['number']}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{$item['number']}}">
      <div class="panel-body">
        
      	{{-- Panel Body --}}
      	<div class="media-body">

			<article>
				{{$item['content']}}
			</article>
		</div>


      </div>
    </div>
  </div>
</div>

	</div>	{{-- media  --}}
</div>	{{-- jumbotron  --}}

@endforeach

@endif