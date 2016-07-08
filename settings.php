<?php
	
	class Link
	{
		public $url;
		public $title;
		public function __construct($url, $title)
		{
			$this->url = $url;
			$this->title = $title;
		}
	}
	
	$links = array(
		'email'			=> new Link('mailto:hola@cambraca.com', 'Email'),
		'twitter'		=> new Link('http://twitter.com/cambraca', 'Twitter'),
//		'facebook'		=> new Link('http://facebook.com/cambraca', 'Facebook'),
		'github'		=> new Link('http://github.com/cambraca', 'GitHub'),
		'linkedin'		=> new Link('http://www.linkedin.com/in/cambraca', 'LinkedIn'),
		'blog'			=> new Link('http://blog.cambraca.com', 'Blog'),
//		'gplus'			=> new Link('https://plus.google.com/u/0/111394655730295880367/about', 'Google+'),
		'soundcloud'	=> new Link('https://soundcloud.com/cambraca', 'SoundCloud'),
		'youtube'		=> new Link('http://www.youtube.com/cambraca1', 'YouTube'),
		'stackoverflow'	=> new Link('http://stackoverflow.com/users/368864/cambraca', 'Stack Overflow'),
		'toptal'	=> new Link('http://www.toptal.com/drupal#amazing-cms', 'Toptal'),
	);
