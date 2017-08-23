<!DOCTYPE html>
<html lang="en">
	<head>
		<style>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	</head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		<style>
		div.gallery {
			border: 1px solid #ccc;
		}

		div.gallery:hover {
			border: 1px solid #777;
		}

		div.gallery img {
			width: 100%;
			height: auto;
		}

		div.desc {
			padding: 15px;
			text-align: center;
		}

		* {
			box-sizing: border-box;
		}

		.responsive {
			padding: 0 6px;
			float: left;
			width: 24.99999%;
		}

		@media only screen and (max-width: 700px){
			.responsive {
				width: 49.99999%;
				margin: 6px 0;
			}
		}

		@media only screen and (max-width: 500px){
			.responsive {
				width: 100%;
			}
		}

		.clearfix:after {
			content: "";
			display: table;
			clear: both;
		}
	</style>
	</head>
	<body>

		<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="img_nature_wide.jpg" style="width:100%">
				<div class="text">Caption Text</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="img_fjords_wide.jpg" style="width:100%">
				<div class="text">Caption Two</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="img_mountains_wide.jpg" style="width:100%">
				<div class="text">Caption Three</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div>
		<br>

		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>

		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				if (n > slides.length) {slideIndex = 1}
				if (n < 1) {slideIndex = slides.length}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex-1].style.display = "block";
				dots[slideIndex-1].className += " active";
			}
		</script>

		<div class="container" style="background-image:('..meme.jpg');">
		...
	</div>

	<body>

		<div class="jumbotron text-center">
			<div class="container-fluid">
			<h1>Michelle Allen</h1>
			<p>Hi I am a web developer</p>
				<div class="container">
					<h2>Circle</h2>
					<p>The .img-circle class shapes the image to a circle (not available in IE8):</p>
					<img src="image/meme.jpg" class="img-meme.jpg" alt="me" width="358" height="638">
				</div>
				<div class="row">
					<div class="col-sm-4" style="background-color:lavender;">.col-sm-4</div>

		<div class="container">
			<h2>Image Gallery</h2>
			<p>The .thumbnail class can be used to display an image gallery.</p>
			<p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
			<p>Click on the images to enlarge them.</p>
			<div class="row">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/lights.jpg" target="_blank">
							<img src="/w3images/lights.jpg" alt="Lights" style="width:100%">
							<div class="caption">
								<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/nature.jpg" target="_blank">
							<img src="/w3images/nature.jpg" alt="Nature" style="width:100%">
							<div class="caption">
								<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="/w3images/fjords.jpg" target="_blank">
							<img src="/w3images/fjords.jpg" alt="Fjords" style="width:100%">
							<div class="caption">
								<p>Lorem ipsum donec id elit non mi porta gravida at eget metus.</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="img1.jpg" style="width:100%">
					<div class="text">Caption Text</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="img2.jpg" style="width:100%">
					<div class="text">Caption Two</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="img3.jpg" style="width:100%">
					<div class="text">Caption Three</div>
				</div>

				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>



<h1>Hello, world!</h1>
			<h2>Responsive Image Gallery</h2>
			<h4>Resize the browser window to see the effect.</h4>

			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="img_fjords.jpg">
						<img src="img_fjords.jpg" alt="Trolltunga Norway" width="300" height="200">
					</a>
					<div class="desc">Add a description of the image here</div>
				</div>
			</div>


			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="img_forest.jpg">
						<img src="img_forest.jpg" alt="Forest" width="600" height="400">
					</a>
					<div class="desc">Add a description of the image here</div>
				</div>
			</div>

			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="img_lights.jpg">
						<img src="img_lights.jpg" alt="Northern Lights" width="600" height="400">
					</a>
					<div class="desc">Add a description of the image here</div>
				</div>
			</div>

			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="img_mountains.jpg">
						<img src="img_mountains.jpg" alt="Mountains" width="600" height="400">
					</a>
					<div class="desc">Add a description of the image here</div>
				</div>
			</div>

			<div class="clearfix"></div>

			<div style="padding:6px;">
				<p>This example use media queries to re-arrange the images on different screen sizes: for screens larger than 700px wide, it will show four images side by side, for screens smaller than 700px, it will show two images side by side. For screens smaller than 500px, the images will stack vertically (100%).</p>
				<p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
			</div>

			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			showSlides(slideIndex = n);
			}

			function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			}





		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
