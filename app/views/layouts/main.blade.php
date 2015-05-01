<html>
<head>
	<title>Cloud9 Computing</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Google Fonts -->

	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<!-- SASS user stylesheet using gulp-autoprefixer and gulp-minify-css CSS -->
	<link rel="stylesheet" type="text/css" href="css/main.css">



</head>
<body>

	@yield('top-banner')

	@include('layouts.partials.nav')

	@yield('content')


	<footer class="footer">
      <div class="container">
   
		<ul class="list-inline">
		  <li class="list-group-item"><a href="/">Home</a></li>
		  <li class="list-group-item"><a href="/services">Services</a></li>
		  <li class="list-group-item"><a href="/contact">Contact</a></li>
		 
		</ul>
		<div>Copyright&copy; Cloud Edwards <?php echo date('Y'); ?></div>
	  </div>
    </footer>



	<!-- JQuery -->
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<!--  jquery script-->
	<script src="js/main.js"></script>

</body>
</html>