<!DOCTYPE html>
<html lang="en">
<head>
	<title>Camilo Bravo</title>

	<meta charset="utf-8">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/JavaScript" src="js/jquery.videobackground.js"></script>
	<script type="text/JavaScript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/easel.js"></script>
	<script type="text/javascript" src="js/easeljs/filters/Filter.js"></script>
	<script type="text/javascript" src="js/easeljs/filters/ColorFilter.js"></script>
	<script type="text/javascript" src="js/tween.js"></script>
	<script type="text/javascript" src="js/CanvasCarousel.js"></script>

	<script type="text/javascript">
		$(document).ready(function()
		{
			new CanvasCarousel("carousel", "load/config.xml.php");
			$('body').prepend('<div id="video-background"></div>');
			$('#video-background').videobackground({
				videoSource: [['video/bg.mp4', 'video/mp4'],
					['video/bg.webm', 'video/webm'],
					['video/bg.ogv', 'video/ogg']],
				poster: 'video/bg.jpg',
				loop: true,
				muted: true,
			});
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
		}
		#carousel {
			display: block;
			margin: 0 auto;
			background: transparent !important;
			position: relative;
		}
		article {
			display: none;
		}
		#video-background {
			position: absolute;
			top: 0;
			left: 0;
			overflow: hidden;
			width: 100%;
			height: 100%;
			z-index: 0;
		}
		#video-background video {
			min-height: 100%;
			min-width: 100%;
		}
	</style>
</head>

<body itemscope itemtype="https://schema.org/Person">
	<canvas id="carousel"></canvas>

	<article>
	<a rel="me" href="https://musicians.today/@cambraca">Mastodon</a>
	<h1 itemprop="name">Camilo Bravo</h1>
	<img src="https://www.gravatar.com/avatar/<?= md5('cambraca@gmail.com') ?>.jpg?size=400" itemprop="image" alt="Profile picture"/>
	</article>
</body>
</html>
