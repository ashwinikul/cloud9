

<div class="jumbotron bio"> <h4>Have any questions? I'd love to hear from you. Send me an email.</h4> </div>

{{ Form::open() }}
	
<div class="form-group">
{{Form::input('text','name', null, 
	[	"class"=>"form-control",
		"placeholder"=>"Name"
	])}}
</div>

<div class="form-group">
{{Form::input('email','email', null, 
	[	"class"=>"form-control",
		"placeholder"=>"Email"
	])}}
</div>

<div class="form-group">
{{Form::textarea('message', null, 
	[	"class"=>"form-control",
		"placeholder"=>"Message"
	])}}
</div>

{{Form::submit('Send', ["class"=>"btn btn-primary", "id"=>"submit-btn"])}}


{{ Form::close() }}