
<?php $packagesTable = packagesTable(); ?>



<div class="container-fluid">

<div class="row">

@foreach($packagesTable as $packages)

  <div class="col-md-4 pricing">
  	<div class"jumbotron">

		<div class="well pricing">
			<div id="pricing-heading">
			<h2>{{$packages['heading']}} 
				<div class="price">
					~ ${{$packages['price']}} 
				</div>
				<small>
					{{$packages['subHeading']}} 
				</small>
			</h2>
			</div>

			<ul class="list-group">

			@foreach($packages['content'] as $key => $value)

			@if($value)

			  <li class="list-group-item list-group-item-success">
			  	 <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
			  	  {{$key}}</li>
			@else
			  <li class="list-group-item list-group-item-danger">
			   <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			   {{$key}}</li>

			@endif

			@endforeach

			</ul>


		</div>
	</div>
  </div>

@endforeach

</div>

</div>