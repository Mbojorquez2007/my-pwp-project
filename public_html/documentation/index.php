<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Theme CSS -->
		<link href="../css/stylesheets.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- jQuery - reqiured for Bootstrap Components -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
	</head>
	<body>

		<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
				<img src="image/chef.jpg" style="width:100%">
				<div class="text">Caption Text</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
				<img src="image/meme.jpg" style="width:100%">
				<div class="text">Caption Two</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
				<img src="image/chef.jpg" style="width:100%">
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

		<div class="jumbotron text-center">
			<div class="container-fluid">
			<h1>Michelle Allen</h1>
			<p>Hi I am a web developer</p>
				<div class="container">
					<h2>Excellence</h2>
					<p></p>
					<img src="image/meme.jpg" class="img-meme.jpg" alt="me" width="358" height="638">
				</div>
				<div class="row">
					<div class="col-sm-4"></div>

		<div class="container">
			<h2>Image Gallery</h2>
			<p>Awsome stuff I have worked on</p>
			<p>Things Im proud of</p>
			<p>Things Im going to work on</p>
			<div class="row">
			<div class="row">
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="image/michelle.jpg" target="_blank">
							<img src="image/michelle.jpg" alt="Lights" style="width:100%">
							<div class="caption">
								<p>Inspired</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="image/michelle.jpg" target="_blank">
							<img src="image/michelle.jpg" alt="Nature" style="width:100%">
							<div class="caption">
								<p>Loyal, Honest</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="thumbnail">
						<a href="image/meme.jpg" target="_blank">
							<img src="image/mock1.jpg" alt="mock1" style="width:100%">
							<div class="caption">
								<p>Inovated</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
			<div class="slideshow-container">
				<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img src="image/mock3.jpg" style="width:100%">
					<div class="text">sososo happy</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img src="image/mock4.jpg" style="width:100%">
					<div class="text">beautiful</div>
				</div>

				<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img src="image/mock3.jpg" style="width:100%">
					<div class="text">Elegent</div>
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
			<h2>My wonderful Gallery</h2>
			<h4>works of art</h4>

			<div class="responsive">
				<div class="gallery">
					<a target="_blank" href="image/mock4.jpg">
						<img src="image/mock1.jpg" alt="Trolltunga Norway" width="300" height="200">
					</a>
					<div class="desc">Master</div>
				</div>
			</div>


			<div class="responsive">
				<div class="gallery">
					<a target="_blank" img src="image/meme.jpg.">
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





		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	</body>
</html>
