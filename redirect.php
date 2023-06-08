<?php
	include_once 'settings.php';

	$site = trim($_GET['site'], '/');
	if (!array_key_exists($site, $links))
	{
die('*'.$site.'*');
		header('Location: /');
		exit;
	}

	$link = $links[$site];

?><!DOCTYPE html>

<html>
	<head>
		<title><?= $link->title ?> :: Camilo Bravo</title>

		<meta charset="utf-8">
		
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KZF7J0K2LE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KZF7J0K2LE');
</script>

		<meta http-equiv="Refresh" content="1; url=<?= $link->url ?>" />
	</head>
	
	<body>
	<a href="<?= $link->url ?>">Redirecting</a>...
	</body>
</html>
