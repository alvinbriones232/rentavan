<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Rent a van</title>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">WebSiteName</a>
	    </div>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="#">Home</a></li>
	      <li><a href="#">Page 1</a></li>
	      <li><a href="#">Page 2</a></li>
	      <li><a href="#">Page 3</a></li>
	    </ul>
	  </div>
	</nav>
	<div class="container">
		@yield('container')
		
	</div>
	<footer class="footer">
		<center>&copy; {{date('Y')}} All rights reserved.</center>
	</footer>
	
</body>
</html>