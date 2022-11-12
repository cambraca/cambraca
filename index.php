<!DOCTYPE html>

<html>
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
				var cc = new CanvasCarousel("carousel", "load/config.xml.php");
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

		<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-38738043-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

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
		<a rel="me" href="https://sunny.garden/@cambraca">Mastodon</a>
		<h1 itemprop="name">Camilo Bravo</h1>
		<img src="https://www.gravatar.com/avatar/<?= md5('cambraca@gmail.com') ?>.jpg?size=400" itemprop="image" />
		</article>
	
	</body>
</html>
