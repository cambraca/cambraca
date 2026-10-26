<?php
	require_once __DIR__ . '/settings.php';

	$site = trim((is_string($_GET['site'] ?? null) ? $_GET['site'] : ''), '/');
	if (!array_key_exists($site, $links))
	{
		$redirects_file = __DIR__ . '/redirects.json';
		$redirects = is_readable($redirects_file) ? json_decode(file_get_contents($redirects_file), TRUE) : [];
		$redirects = is_array($redirects) ? $redirects : [];
		if (isset($redirects[$site]) && is_string($redirects[$site]) && !preg_match('/[\r\n]/', $redirects[$site])) {
//			header("HTTP/1.1 301 Moved Permanently");
			header("Location: " . $redirects[$site]);
			exit;
		}
die('*'.htmlspecialchars($site, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8').'*');
		header('Location: /');
		exit;
	}

	$link = $links[$site];

?><!DOCTYPE html>

<html>
	<head>
		<title><?= htmlspecialchars((string) $link->title, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?> :: Camilo Bravo</title>

		<meta charset="utf-8">
		
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-KZF7J0K2LE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-KZF7J0K2LE');
</script>

		<meta http-equiv="Refresh" content="1; url=<?= htmlspecialchars((string) $link->url, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>" />
	</head>
	
	<body>
	<a href="<?= htmlspecialchars((string) $link->url, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') ?>">Redirecting</a>...
	</body>
</html>
