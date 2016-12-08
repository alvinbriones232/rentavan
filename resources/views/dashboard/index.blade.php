@extends('main')

@section('container')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slider/slippry.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slider/style.css') }}">
	<script src="{{ asset('js/slider/slippry.min.js') }}"></script>
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
		<section id="news-demo">
		  <article>
		    <div class="image-content"><img src="http://slippry.com/assets/img/image-1.jpg" alt="demo1_1"></div>
		  </article>
		  <article>
		    <div class="image-content"><img src="http://slippry.com/assets/img/image-2.jpg" alt="demo1_1"></div>
		  </article>
		  <article>
		    <div class="image-content"><img src="http://slippry.com/assets/img/image-3.jpg" alt="demo1_1"></div>
		  </article>
		</section>
	</div>

	 <script language="javascript" type="text/javascript">
		$(function () {
			/*$("#fileupload").change(function () {
		        if (typeof (FileReader) != "undefined") {
		            var dvPreview = $("#dvPreview");
		            dvPreview.html("");
		            var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
		            $($(this)[0].files).each(function () {
		                var file = $(this);
		                if (regex.test(file[0].name.toLowerCase())) {
		                    var reader = new FileReader();
		                    reader.onload = function (e) {
		                        var img = $("<img />");
		                        img.attr("style", "height:100px;width: 100px");
		                        img.attr("src", e.target.result);
		                        dvPreview.append(img);
		                    }
		                    reader.readAsDataURL(file[0]);
		                } else {
		                    alert(file[0].name + " is not a valid image file.");
		                    dvPreview.html("");

		                    return false;
		                }
		            });
		        } else {
		            alert("This browser does not support HTML5 FileReader.");
		        }
		    });*/
		});
		jQuery('#news-demo').slippry({
		// general elements & wrapper
		slippryWrapper: '<div class="sy-box news-slider" />', // wrapper to wrap everything, including pager
		elements: 'article', // elments cointaining slide content

		// options
		adaptiveHeight: false, // height of the sliders adapts to current 
		captions: false,

		// pager
		pagerClass: 'news-pager',

		// transitions
		transition: 'fade', // fade, horizontal, kenburns, false
		speed: 1200,
		pause: 8000,

		// slideshow
		autoDirection: 'prev'
		});
	</script>
@endsection