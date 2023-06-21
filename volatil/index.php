<!DOCTYPE html>
<html lang="en">
<head>
	<title>Volatil album (2023) :: Camilo Bravo</title>

	<meta charset="utf-8">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/JavaScript" src="../js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="../js/easel.js"></script>
	<script type="text/javascript" src="../js/easeljs/filters/Filter.js"></script>
	<script type="text/javascript" src="../js/easeljs/filters/ColorFilter.js"></script>
	<script type="text/javascript" src="../js/tween.js"></script>
	<script type="text/javascript" src="../js/CanvasCarousel.js"></script>

	<script type="text/javascript">
		$(document).ready(function()
		{
			new CanvasCarousel("carousel", "config.xml.php");
		});
	</script>

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-KZF7J0K2LE"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-KZF7J0K2LE');
	</script>

	<style>
		body {
			background-color: black;
			overflow: hidden;
			text-align: center;
			color: blanchedalmond;
			margin: 0;
		}
		.wrapper {
			width: 100vw;
			height: 100vh;
			display: grid;
			align-items: center;
			justify-content: center;
		}
		.cover {
			width: 1024px;
			max-width: 90vw;
			position: relative;
		}
		.cover img {
			width: 100%;
			height: auto;
		}
		#carousel {
			display: block;
			margin: 0 auto;
			background: transparent !important;
			background: linear-gradient(rgba(0,0,0,0) 0%, rgba(0,0,0,.25) 40%) !important;
			position: absolute;
			bottom: 0;
		}
	</style>
</head>

<body>
	<section class="wrapper">
		<article class="cover">
			<img src="images/cover.jpg" alt="Volatil album cover">
			<canvas id="carousel"></canvas>
		</article>
	</section>

	<a style="display: none;" rel="me" href="https://musicians.today/@cambraca">Mastodon</a>
</body>
</html>
