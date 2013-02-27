<?php
	include_once 'settings.php';

	$site = $_GET['site'];
	if (!array_key_exists($site, $links))
	{
		header('Location: /');
		exit;
	}

	$link = $links[$site];

?><!DOCTYPE html>

<html>
	<head>
		<title><?= $link->title ?> redirect :: Camilo Bravo</title>

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

		<meta http-equiv="Refresh" content="1; url=<?= $link->url ?>" />
	</head>
	
	<body>
	<a href="<?= $link->url ?>">Redirecting</a>...
	</body>
</html>
