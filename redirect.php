<?php
	$images = array('twitter','facebook','github','linkedin','blog','gplus','soundcloud','youtube');
	$urls = array(
		'http://twitter.com/cambraca',
		'http://facebook.com/cambraca',
		'http://github.com/cambraca',
		'http://www.linkedin.com/in/cambraca',
		'http://blog.cambraca.com',
		'https://plus.google.com/u/0/111394655730295880367/about',
		'https://soundcloud.com/cambraca',
		'http://www.youtube.com/cambraca1',
	);

	$site = $_GET['site'];
	if (!in_array($site, $images))
	{
		header('Location: /');
		exit;
	}

	$url = $urls[array_search($site, $images)];

?><!DOCTYPE html>

<html>
	<head>
		<title>Camilo Bravo</title>

		<meta charset="utf-8">
		
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

		<meta http-equiv="Refresh" content="1; url=<?= $url ?>" />
	</head>
	
	<body>
	<a href="<?= $url ?>">Redirecting</a>...
	</body>
</html>
