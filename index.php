<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>

<link rel="stylesheet" type="text/css" href="css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">


	<!--  -->
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">

	<script type="text/javascript" src="js/all.min.js"></script>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>



	<style type="text/css">
		body{
			background-color: black;
			/*background-image: url('images/4.jpg');*/
			background-position: center center;
			-webkit-background-size:cover;
			background-size: cover;
		}

	/*	.wrapper{
			width: 1070px;
			margin: 0 auto;

		}

		.wrapper a img{
			width: 100%;
		}*/
		.wrapper a{
			width: 32%;
			float: left;
			margin: 5px;
		}
	</style>
</head>
<body>

<h1 class="text-center text-light">Fancy Bax Images</h1>

<div class="container">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
			<!--  -->
<div class="wrapper">
	<a data-fancybox="gallery" href="https://www.youtube.com/watch?v=Z6WqKS9jXJk" data-caption="My First Images"><img src="images/dm.png" class="img-fluid"></a>
	<a data-fancybox="gallery" href="images/ecom.png" data-caption="My Second Images"><img src="images/ecom.png" class="img-fluid"></a>

		<a data-fancybox="gallery" href="images/responsive.png" data-caption="My Third Images"><img src="images/responsive.png" class="img-fluid"></a>
		<a data-fancybox="gallery" href="images/phone.jpg" data-caption="My Forth Images"><img src="images/phone.jpg" class="img-fluid"></a>
		<a data-fancybox="gallery" href="images/SEO.png" data-caption="My Fifth Images"><img src="images/SEO.png" class="img-fluid"></a>
		
		<a data-fancybox="gallery" href="images/phone.jpg" data-caption="My Forth Images"><img src="images/phone.jpg" class="img-fluid"></a>

</div>
<!-- wrapper close -->


		</div>
		<!-- col close -->
	</div>
	<!-- row -->
</div>
<!-- container -->

<!--  -->

<script type="text/javascript">
		$('[data-fancybox="gallery"]').fancybox({
			loop : true,

			 buttons: [
                  "zoom",
                  "share",
                  "slideShow",
                  "fullScreen",
                  "download",
                  "thumbs",
                  "close"
                ],
              animationEffect: "zoom-in-out",
             transitionEffect: "circular",
            //transitionDuration: 366,


         });
	</script>
	
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</body>
</html>