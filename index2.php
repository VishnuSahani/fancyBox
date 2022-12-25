<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>


	<style type="text/css">
	

		.wrapper{
			width: 1070px;
			margin: 0 auto;

		}

		.wrapper a img{
			width: 100%;
		}
		.wrapper a{
			width: 32%;
			float: left;
			margin: 5px;
		}
	</style>
</head>
<body>

<h1>Fancy Bax Images</h1>
<div class="wrapper">
	

</div>
<!-- wrapper close -->

<div class="fancybox-container" role="dialog" tabindex="-1">
	<div class="fancybox-bg">
		

<div class="fancybox-inner">
	<!--  -->

	<!--  -->
	<div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div>

	<div class="fancybox-toolbar">{{buttons}}</div>
<div class="fancybox-navigation">{{arrows}}</div>

<div class="fancybox-stage"></div>
<div class="fancybox-caption"><div class="fancybox-caption__body">
	
</div>
	</div>
	<!-- fancybox bg -->

</div>
<!-- fancybox inner -->
</div>
<!-- fancybox container -->


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
</body>
</html>