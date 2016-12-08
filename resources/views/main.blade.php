<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <script src="{{asset('js/jquery.js')}}"></script> -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<title>Rent a van</title>
</head>
<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="{{url('/')}}">WebSiteName</a>
	    </div>
	    @if(Auth::check())
	    	<ul class="nav navbar-nav">
		      <li><a href="{{url('dashboard')}}">Dashboard</a></li>
		      <li><a href="{{ url('create-ad') }}">Create an Ad</a></li>
		    </ul>
	    @endif
	    
	    <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
	  </div>
	</nav>
	<div class="container">
		@yield('container')
		
	</div>
	<footer class="footer">
		<center>&copy; {{date('Y')}} All rights reserved.</center>
	</footer>
	<!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>