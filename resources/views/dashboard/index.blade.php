@extends('main')

@section('container')
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/slider/lightslider.css') }}"> -->
	<link href="{{ asset('css/slider/ninja-slider.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/slider/ninja-slider.js') }}"></script>
    <link href="{{ asset('css/slider/thumbnail-slider.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/slider/thumbnail-slider.js') }}" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slider/style.css') }}">
	<div class="row">
		<table class="table">
			<tr>
				<td>Name:</td>
				<td>Name of company or person</td>
			</tr>
			<tr>
				<td>Location:</td>
				<td>Place</td>
			</tr>
			<tr>
				<td>Price:</td>
				<td>P100.00</td>
			</tr>
			<tr>
				<td>Contact Number:</td>
				<td>09999999999</td>
			</tr>
			<tr>
				<td>Description</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
			</tr>
		</table>
		<!-- <section id="news-demo">
		  <article>
		    <div class="image-content"><img src="http://slippry.com/assets/img/image-1.jpg" alt="demo1_1"></div>
		  </article>
		  <article>
		    <div class="image-content"><img src="http://slippry.com/assets/img/image-2.jpg" alt="demo1_1"></div>
		  </article>
		  <article>
		    <div class="image-content"><img src="http://slippry.com/assets/img/image-3.jpg" alt="demo1_1"></div>
		  </article>
		</section> -->
		<div style="width:1000px;margin:80px auto;">
	        <div id="ninja-slider" style="float:left;">
	            <div class="slider-inner">
	                <ul>
	                    <li><a class="ns-img" href="{{asset('storage/img/1.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/2.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/3.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/4.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/5.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/6.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/7.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/8.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/9.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/10.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/11.jpg')}}"></a></li>
	                    <li><a class="ns-img" href="{{asset('storage/img/12.jpg')}}"></a></li>
	                </ul>
	                <div class="fs-icon" title="Expand/Close"></div>
	            </div>
	        </div>
	        <div id="thumbnail-slider" style="float:left;">
	            <div class="inner">
	                <ul>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/1.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/2.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/3.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/4.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/5.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/6.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/7.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/8.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('istorage/mg/9.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/10.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/11.jpg')}}"></a>
	                    </li>
	                    <li>
	                        <a class="thumb" href="{{asset('storage/img/12.jpg')}}"></a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	        <div style="clear:both;"></div>
	    </div>
		
	</div>
	
@endsection