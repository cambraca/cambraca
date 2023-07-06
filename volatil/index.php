<!DOCTYPE html>
<html lang="en">
<head>
	<title>Volatil album (2023) :: Camilo Bravo</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

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
			margin: 0;
		}

		ul, li {
			margin: 0;
			padding: 0;
		}

		.cover img {
			width: 100%;
			height: auto;
		}

		#mobile-links {
			display: grid;
			grid-row-gap: 10px;
			grid-column-gap: 50px;
			margin: 30px;
			grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
		}

		#mobile-links img {
			max-width: 100%;
			height: auto;
		}

		@media not screen and (min-width: 1024px) and (min-height: 1024px) {
			#carousel {
				display: none;
			}
		}

		@media screen and (min-width: 1024px) and (min-height: 1024px) {
			body {
				overflow: hidden;
				text-align: center;
				color: blanchedalmond;
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

			#carousel {
				display: block;
				margin: 0 auto;
				background: transparent !important;
				background: linear-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, .25) 40%) !important;
				position: absolute;
				bottom: 0;
			}

			#mobile-links {
				display: none;
			}
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

	<ul id="mobile-links">
		<?php
		include_once 'settings.php';
		function shuffle_assoc(&$array)
		{
			$keys = array_keys($array);
			shuffle($keys);
			foreach ($keys as $key)
				$new[$key] = $array[$key];
			$array = $new;
			return true;
		}
		shuffle_assoc($links);
		foreach ($links as $image => $link):
			if ($link->hidden) continue;
			?>
			<li>
				<a href="/redirect.php?site=volatil_<?= $image ?>">
					<img src="logos/<?= $image ?>.png" alt="<?= $link->title ?>">
				</a>
			</li>
		<?php endforeach; ?>
	</ul>

	<a style="display: none;" rel="me" href="https://musicians.today/@cambraca">Mastodon</a>
</body>
</html>
